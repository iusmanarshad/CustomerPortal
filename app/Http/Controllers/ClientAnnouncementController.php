<?php

namespace App\Http\Controllers;

use App\Enums\ChannelTypeEnum;
use App\Http\Requests\GetAnnouncementMessagesRequest;
use App\Http\Resources\AdminChannelMessageResource;
use App\Http\Resources\AdminChannelResource;
use App\Models\ChatChannel;
use App\Models\ChatChannelMember;
use App\Models\ChatChannelMessage;
use App\Models\User;
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
        $user = auth()->user();
        if ($user->role_id == 3) {
            $clientUser = User::where('id', '=', $user->associate_id)->first();
        } else {
            $clientUser = $user;
        }
        $memberships = ChatChannelMember::where('user_id', '=', $clientUser->id)->get();
        $groups = ChatChannel::query()
            ->where('type', '=', ChannelTypeEnum::ANNOUNCEMENT)
            ->whereIn('id', $memberships->pluck('channel_id')->toArray())
            ->orderByDesc('last_activity')
            ->get();
        return response()->json(['groups' => AdminChannelResource::collection($groups)]);
    }

    public function getGroupMessages(GetAnnouncementMessagesRequest $request)
    {
        $messages = ChatChannelMessage::where('channel_id', '=', $request->group_id)->get();
        return response()->json(['messages' => AdminChannelMessageResource::collection($messages)]);
    }
}
