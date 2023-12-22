<?php

namespace App\Http\Controllers;

use App\Http\Requests\GetAnnouncementMessagesRequest;
use App\Http\Resources\AdminChannelMessageResource;
use App\Http\Resources\AdminChannelResource;
use App\Models\ChatChannel;
use App\Models\ChatChannelMessage;
use App\Services\ChatService;
use Illuminate\Http\Request;

class ClientAnnouncementController extends Controller
{
    private $chatService;

    public function __construct()
    {
        $this->chatService = new ChatService();
    }

    public function index()
    {
        return view('client-app.chat.announcements');
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
}
