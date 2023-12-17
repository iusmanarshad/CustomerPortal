<?php

namespace App\Http\Controllers;

use App\Http\Resources\AdminChannelMessageResource;
use App\Http\Resources\AdminChannelResource;
use App\Http\Resources\AdminClientResource;
use App\Models\ChatChannel;
use App\Models\ChatChannelMember;
use App\Models\ChatChannelMessage;
use App\Models\User;
use App\Services\ChatService;
use Illuminate\Http\Request;

class AdminAnnouncementController extends Controller
{

    private $chatService;

    public function __construct()
    {
        $this->chatService = new ChatService();
    }

    public function getClients()
    {
        $clients = User::where('role_id', '=', 2)->get();
        return response()->json(['clients' => AdminClientResource::collection($clients)]);
    }

    public function getChannels()
    {
        $channels = ChatChannel::where('type', '=', 'announcement')->get();
        return response()->json(['channels' => AdminChannelResource::collection($channels)]);
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
