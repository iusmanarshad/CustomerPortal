<?php

namespace App\Http\Controllers;

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
        $clients = User::where('role_id', '=', 2)->get();
        return response()->json(['clients' => AdminClientResource::collection($clients)]);
    }

    public function getGroups()
    {
        $groups = ChatChannel::where('type', '=', 'announcement')->orderByDesc('last_activity')->get();
        return response()->json(['groups' => AdminChannelResource::collection($groups)]);
    }

    public function getGroupMessages(GetAnnouncementMessagesRequest $request)
    {
        $messages = ChatChannelMessage::where('channel_id', '=', $request->group_id)->get();
        return response()->json(['messages' => AdminChannelMessageResource::collection($messages)]);
    }

    public function createGroup(CreateAnnouncementGroupRequest $request)
    {
        $group = $this->chatService->createChannel($request->slug, $request->name, 'announcement', $request->description);
        $adminUser = User::where('role_id', '=', 1)->first();
        $this->chatService->addChannelMember($group->id, $adminUser->id);
        return response()->json([
            'message' => 'Group created successfully',
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
        $adminUser = User::where('role_id', '=', 1)->first();
        $group = ChatChannel::where('id', '=', $request->group_id)->first();
        $message = $this->chatService->addChannelMessage($group->id, $adminUser->id, $messageData);
        $group->last_activity = Carbon::now();
        $group->save();

        return response()->json(['message' => 'message sent successfully', 'new_message' => new AdminChannelMessageResource($message)]);
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
}
