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
use App\Models\ChatChannel;
use App\Models\ChatChannelMember;
use App\Models\User;
use App\Services\ChatService;
use Carbon\Carbon;

class ClientChatController extends Controller
{
    private $chatService;

    public function __construct()
    {
        $this->chatService = new ChatService();
    }

    public function index()
    {
        return view('client-app.chat.messages');
    }

    public function getChannelMessages()
    {
        $adminUser = User::where('role_id', '=', RoleEnum::ADMINROLE)->first();
        $clientUser = auth()->user();

        $slug = 'ch_one-to-one_' . $adminUser->id . '_' . $clientUser->id;
        $channel = $this->chatService->getChannel($slug);

        if (!$channel) {
            // create channel
            $channelName = 'admin_' . $clientUser->first_name . '-' . $clientUser->last_name;
            $channel = $this->chatService->createChannel($slug, $channelName, ChannelTypeEnum::ONE_TO_ONE);

            // create channel members
            $this->chatService->addChannelMember($channel->id, $adminUser->id);
            $this->chatService->addChannelMember($channel->id, $clientUser->id);
        }

        $messages = $this->chatService->getChannelMessages($channel->id);

        return response()->json([
            'channel' => new AdminChannelResource($channel),
            'messages' => count($messages) > 0 ? AdminChannelMessageResource::collection($messages) : []
        ]);
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

    public function sendMessage(SendChannelMessageRequest $request)
    {
        $adminUser = User::where('role_id', '=', RoleEnum::ADMINROLE)->first();
        $clientUser = auth()->user();

        $slug = 'ch_one-to-one_' . $adminUser->id . '_' . $clientUser->id;
        $channel = $this->chatService->getChannel($slug);

        $messageData = [
            'type' => 'text',
            'message' => $request->message,
            'timestamp' => Carbon::now()
        ];
        $message = $this->chatService->addChannelMessage($channel->id, $clientUser->id, $messageData);
        $newMessage = new AdminChannelMessageResource($message);

        $channel->last_activity = Carbon::now();
        $channel->save();

        // add unread message count
        $this->addUnreadMessageCount($channel->id, $clientUser->id);

        broadcast(new MessageSent($clientUser, $newMessage))->toOthers();
        broadcast(new ChatMessageSent($clientUser, $newMessage))->toOthers();

        return response()->json([
            'message' => 'message sent successfully',
            'new_message' => $newMessage,
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
