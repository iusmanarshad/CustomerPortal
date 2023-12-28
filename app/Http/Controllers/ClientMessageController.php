<?php

namespace App\Http\Controllers;

use App\Enums\RoleEnum;
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

class ClientMessageController extends Controller
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

    public function getGroupMessages(Request $request)
    {
        $messages = [];
        $adminUser = User::where('role_id', '=', RoleEnum::ADMINROLE)->first();
        $clientUser = auth()->user();
        $slug = 'ch_one-to-one_' . $adminUser->id . '_' . $clientUser->id;
        $group = ChatChannel::where('slug', '=', $slug)->first();
        if ($group) {
            $messages = ChatChannelMessage::where('channel_id', '=', $group->id)->get();
            $messages = AdminChannelMessageResource::collection($messages);
            //$group = new AdminChannelResource($group);
        }
        return response()->json(['group' => $group, 'messages' => $messages]);
    }

    public function sendMessage(Request $request)
    {
        $adminUser = User::where('role_id', '=', RoleEnum::ADMINROLE)->first();
        $clientUser = auth()->user();

        $groupData = [
            'name' => 'admin_' . $clientUser->first_name,
            'slug' => 'ch_one-to-one_' . $adminUser->id . '_' . $clientUser->id,
            'type' => 'one-to-one',
            'is_active' => true,
            'last_activity' => Carbon::now()
        ];
        if (!empty($description)) {
            $groupData['description'] = $description;
        }
        ChatChannel::updateOrCreate(['slug' => $groupData['slug']], $groupData);
        $group = ChatChannel::where('slug', '=', $groupData['slug'])->first();

        $messageData = [
            'type' => 'text',
            'message' => $request->message,
            'timestamp' => Carbon::now()
        ];
        $message = $this->chatService->addChannelMessage($group->id, $clientUser->id, $messageData);
        $newMessage = new AdminChannelMessageResource($message);
        $group->last_activity = Carbon::now();
        $group->save();

        broadcast(new MessageSent($clientUser, $newMessage))->toOthers();
        return response()->json([
            'message' => 'message sent successfully',
            'new_message' => $newMessage,
            //'group' => new AdminChannelResource($group)
        ]);
    }
}
