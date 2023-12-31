<?php

namespace App\Http\Controllers;

use App\Enums\ChannelTypeEnum;
use App\Enums\RoleEnum;
use App\Events\ChatMessageSent;
use App\Events\MessageSent;
use App\Http\Requests\SendChannelMessageRequest;
use App\Http\Requests\UpdateChannelRequest;
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

class AdminChatController extends Controller
{
    private $chatService;

    public function __construct()
    {
        $this->chatService = new ChatService();
    }

    public function index()
    {
        return view('customer-portal.chat.messages');
    }

    public function getClients()
    {
        $clients = User::where('role_id', '=', RoleEnum::CLIENTROLE)->get();
        return response()->json(['clients' => AdminClientResource::collection($clients)]);
    }

    public function getChannels()
    {
        $channels = ChatChannel::where('type', '=', ChannelTypeEnum::ONE_TO_ONE)->orderByDesc('last_activity')->get();
        return response()->json(['channels' => AdminChannelResource::collection($channels)]);
    }

    public function getChannelMessages(UpdateChannelRequest $request)
    {
        $messages = ChatChannelMessage::where('channel_id', '=', $request->channel_id)->get();
        return response()->json(['messages' => AdminChannelMessageResource::collection($messages)]);
    }

    public function getUnreadMessagesCount()
    {
        $user = auth()->user();
        $unreadMessagesCount = $this->unnreadMessageCount($user);

        return response()->json([
            'announcements' => $unreadMessagesCount['announcement'],
            'messages' => $unreadMessagesCount['message']]
        );
    }

    public function readMessages(UpdateChannelRequest $request)
    {
        $user = auth()->user();
        $channel = ChatChannel::find($request->channel_id);
        $channelMember = ChatChannelMember::query()
            ->where('channel_id', '=', $channel->id)
            ->where('user_id', '=', $user->id)
            ->first();
        $channelMember->unread_message_count = 0;
        $channelMember->save();

        $unreadMessagesCount = $this->unnreadMessageCount($user);

        return response()->json([
                'message' => 'Read receipt updated successfully',
                'announcements' => $unreadMessagesCount['announcement'],
                'messages' => $unreadMessagesCount['message']]
        );
    }

    public function createChannel(Request $request)
    {
        $adminUser = auth()->user();
        $clientUser = User::find($request->client_id);
        $channelData = [
            'name' => 'admin_' . $clientUser->first_name,
            'slug' => 'ch_one-to-one_' . $adminUser->id . '_' . $clientUser->id,
            'type' => ChannelTypeEnum::ONE_TO_ONE,
            'is_active' => true,
            'last_activity' => Carbon::now()
        ];

        if (!empty($description)) {
            $channelData['description'] = $description;
        }

        ChatChannel::updateOrCreate(['slug' => $channelData['slug']], $channelData);
        $channel = ChatChannel::where('slug', '=', $channelData['slug'])->first();

        ChatChannelMember::updateOrCreate(
            ['channel_id' => $channel->id, 'user_id' => $adminUser->id],
            ['channel_id' => $channel->id, 'user_id' => $adminUser->id, 'is_active' => true]
        );
        ChatChannelMember::updateOrCreate(
            ['channel_id' => $channel->id, 'user_id' => $clientUser->id],
            ['channel_id' => $channel->id, 'user_id' => $clientUser->id, 'is_active' => true]
        );

        return response()->json([
            'message' => 'Channel created successfully',
            'channel' => new AdminChannelResource($channel)
        ]);
    }

    public function sendMessage(SendChannelMessageRequest $request)
    {
        $messageData = [
            'type' => 'text',
            'message' => $request->message,
            'timestamp' => Carbon::now()
        ];
        $adminUser = User::where('role_id', '=', RoleEnum::ADMINROLE)->first();
        $channel = ChatChannel::where('id', '=', $request->channel_id)->first();
        $message = $this->chatService->addChannelMessage($channel->id, $adminUser->id, $messageData);
        $newMessage = new AdminChannelMessageResource($message);
        $channel->last_activity = Carbon::now();
        $channel->save();

        // add unread message count
        $this->addUnreadMessageCount($channel->id, $adminUser->id);

        broadcast(new MessageSent($adminUser, $newMessage))->toOthers();
        broadcast(new ChatMessageSent($adminUser, $newMessage))->toOthers();
        return response()->json([
            'message' => 'message sent successfully',
            'new_message' => $newMessage,
            'channel' => new AdminChannelResource($channel)
        ]);
    }

    private function unnreadMessageCount($user)
    {
        $unreadMessagesCount = [
            'announcement' => 0,
            'message' => 0
        ];

        $memberships = ChatChannelMember::where('user_id', '=', $user->id)->get();
        foreach ($memberships as $membership) {
            $channel = ChatChannel::find($membership->channel_id);
            if ($channel) {
                if ($channel->type === ChannelTypeEnum::ANNOUNCEMENT) {
                    $unreadMessagesCount['announcement'] = $unreadMessagesCount['announcement'] + $membership->unread_message_count;
                }
                if ($channel->type === ChannelTypeEnum::ONE_TO_ONE) {
                    $unreadMessagesCount['message'] = $unreadMessagesCount['message'] + $membership->unread_message_count;
                }
            }
        }

        return $unreadMessagesCount;
    }

    private function addUnreadMessageCount($channelId, $senderId)
    {
        $members = ChatChannelMember::query()
            ->where('channel_id', '=', $channelId)
            ->where('user_id', '!=', $senderId)
            ->get();

        foreach ($members as $member) {
            $member->unread_message_count += 1;
            $member->save();
        }
    }
}
