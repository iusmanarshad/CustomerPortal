<?php

namespace App\Http\Controllers;

use App\Enums\ChannelTypeEnum;
use App\Enums\RoleEnum;
use App\Events\AnnouncementMessageSent;
use App\Events\ChatMessageSent;
use App\Events\MessageSent;
use App\Http\Requests\CustomerPortal\CreateAnnouncementGroupRequest;
use App\Http\Requests\GetAnnouncementMessagesRequest;
use App\Http\Requests\SendAnnouncementMessageRequest;
use App\Http\Resources\AdminChannelMessageResource;
use App\Http\Resources\AdminChannelResource;
use App\Http\Resources\AdminClientResource;
use App\Models\ChatChannel;
use App\Models\ChatChannelMember;
use App\Models\ChatChannelMessage;
use App\Models\User;
use App\Services\ChatService;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AdminAnnouncementController extends Controller
{

    private $chatService;

    public function __construct()
    {
        $this->chatService = new ChatService();
    }

    public function index()
    {
        return view('customer-portal.chat.announcements');
    }

    public function getClients()
    {
        $clients = User::where('role_id', '=', RoleEnum::CLIENTROLE)->get();
        return response()->json(['clients' => AdminClientResource::collection($clients)]);
    }

    public function getGroups()
    {
        $groups = ChatChannel::where('type', '=', ChannelTypeEnum::ANNOUNCEMENT)->orderByDesc('last_activity')->get();
        return response()->json(['groups' => AdminChannelResource::collection($groups)]);
    }

    public function getGroupMessages(GetAnnouncementMessagesRequest $request)
    {
        $messages = ChatChannelMessage::where('channel_id', '=', $request->group_id)->get();
        return response()->json(['messages' => AdminChannelMessageResource::collection($messages)]);
    }

    public function createGroup(CreateAnnouncementGroupRequest $request)
    {
        $groupName = $request->name;
        $groupSlug = str_replace(' ', '-', $groupName);
        $group = $this->chatService->createChannel($groupSlug, $groupName, ChannelTypeEnum::ANNOUNCEMENT, $request->description);
        $adminUser = User::where('role_id', '=', RoleEnum::ADMINROLE)->first();
        $this->chatService->addChannelMember($group->id, $adminUser->id);
        return response()->json([
            'message' => 'Group created successfully',
            'group' => new AdminChannelResource($group)
        ]);
    }

    public function removeGroup(Request $request)
    {
        $group = ChatChannel::where('id', '=', $request->group_id)->first();
        if ($group) {
            $this->chatService->removeChannel($group->id);
        }

        return response()->json(['message' => 'Group removed successfully']);
    }

    public function updateGroupMembers(Request $request)
    {
        $group = ChatChannel::where('id', '=', $request->group_id)->first();
        ChatChannelMember::where('channel_id', '=', $group->id)->where('user_id', '!=', 1)->delete();
        if (!empty($request->members)) {
            $members = explode(',', $request->members);
            foreach ($members as $member) {
                $this->chatService->addChannelMember($group->id, $member);
            }
        }

        $group->last_activity = Carbon::now();
        $group->save();

        return response()->json([
            'message' => 'group members updated successfully',
            'group' => new AdminChannelResource($group)
        ]);
    }

    public function sendMessage(SendAnnouncementMessageRequest $request)
    {
        $messageData = [
            'type' => 'text',
            'message' => $request->message,
            'timestamp' => Carbon::now()
        ];
        $adminUser = User::where('role_id', '=', RoleEnum::ADMINROLE)->first();
        $group = ChatChannel::where('id', '=', $request->group_id)->first();
        $message = $this->chatService->addChannelMessage($group->id, $adminUser->id, $messageData);
        $newMessage = new AdminChannelMessageResource($message);
        $group->last_activity = Carbon::now();
        $group->save();

        // add unread message count
        $this->addUnreadMessageCount($group->id, $adminUser->id);
        broadcast(new MessageSent($adminUser, $newMessage))->toOthers();
        broadcast(new AnnouncementMessageSent($adminUser, $newMessage))->toOthers();
        return response()->json([
            'message' => 'message sent successfully',
            'new_message' => new AdminChannelMessageResource($message),
            'group' => new AdminChannelResource($group)
        ]);
    }

    public function getChannelMessages(Request $request)
    {
        $channelId = $request->channel_id;
        $channel = ChatChannel::query()
            ->when($channelId, function ($q) use($channelId) {
                $q->where('id', '=', $channelId);
            })
            ->first();

        $messages = ChatChannelMessage::where('channel_id', '=', $channel->id)->where('is_blocked', '=', 0)->get();
        return response()->json(['messages' => AdminChannelMessageResource::collection($messages)]);
    }

    public function createChannel(Request $request)
    {
        $channel = $this->chatService->createChannel($request->slug, $request->name, $request->type, $request->description);
        $data = ['channel' => $channel, 'members' => []];
        if ($request->has('members')) {
            $memberIds = explode(',', $request->memebrs);
            $users = User::whereIn('id', $memberIds)->get();
            $usersData = [];
            foreach ($users as $user) {
                $usersData[] = [
                    'channel_id' => $channel->id,
                    'user_id' => $user->id,
                    'is_active' => true
                ];
            }

            ChatChannelMember::insert($usersData);
            $members = $this->chatService->getChannelMembers($channel->id);
            $data['members'] = AdminClientResource::collection($members);
        }

        return response()->json($data);
    }

    public function updateChannelMembers(Request $request)
    {
        $channel = ChatChannel::find($request->channel_id);
        $memberIds = explode(',', $request->memebrs);
        $users = User::whereIn('id', $memberIds)->get();
        $usersData = [];
        foreach ($users as $user) {
            $usersData[] = [
                'channel_id' => $channel->id,
                'user_id' => $user->id,
                'is_active' => true
            ];
        }

        ChatChannelMember::where('channel_id', '=', $channel->id)->delete();
        ChatChannelMember::insert($usersData);
        $members = $this->chatService->getChannelMembers($channel->id);

        return response()->json(['channel' => $channel, 'members' => AdminClientResource::collection($members)]);
    }

    private function addUnreadMessageCount($groupId, $senderId)
    {
        $members = ChatChannelMember::query()
            ->where('channel_id', '=', $groupId)
            ->where('user_id', '!=', $senderId)
            ->get();

        foreach ($members as $member) {
            $member->unread_message_count += 1;
            $member->save();
        }
    }
}
