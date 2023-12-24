<?php

namespace App\Http\Controllers;

use App\Http\Requests\CustomerPortal\CreateAnnouncementGroupRequest;
use App\Http\Requests\GetAnnouncementMessagesRequest;
use App\Http\Requests\SendAnnouncementMessageRequest;
use App\Http\Resources\AdminChannelMessageResource;
use App\Http\Resources\AdminChannelResource;
use App\Http\Resources\AdminClientResource;
use App\Models\ChatChannel;
use App\Models\ChatChannelMessage;
use App\Models\User;
use App\Services\ChatService;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AdminMessagesController extends Controller
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
        $clients = User::where('role_id', '=', 2)->get();
        return response()->json(['clients' => AdminClientResource::collection($clients)]);
    }

    public function getGroups()
    {
        $groups = ChatChannel::where('type', '=', 'one-to-one')->orderByDesc('last_activity')->get();
        return response()->json(['groups' => AdminChannelResource::collection($groups)]);
    }

    public function getGroupMessages(GetAnnouncementMessagesRequest $request)
    {
        $messages = ChatChannelMessage::where('channel_id', '=', $request->group_id)->get();
        return response()->json(['messages' => AdminChannelMessageResource::collection($messages)]);
    }

    public function createGroup(Request $request)
    {
        $adminUser = auth()->user();
        $clientUser = User::find($request->client_id);
        $groupData = [
            'name' => 'admin_' . $clientUser->first_name,
            'slug' => 'ch_one-to-one_' . $adminUser->id . '_' . $clientUser->id,
            'type' => 'one-to-one'
        ];
        $group = $this->chatService->createChannel($groupData['slug'], $groupData['name'], $groupData['type']);
        $this->chatService->addChannelMember($group->id, $adminUser->id);
        $this->chatService->addChannelMember($group->id, $clientUser->id);
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

        return response()->json([
            'message' => 'message sent successfully',
            'new_message' => new AdminChannelMessageResource($message),
            'group' => new AdminChannelResource($group)
        ]);
    }
}
