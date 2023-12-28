<?php

namespace App\Http\Controllers;

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
        $adminUser = User::where('role_id', '=', 1)->first();
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
        $adminUser = User::where('role_id', '=', 1)->first();
        $clientUser = auth()->user();

        // create & get chat group
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

        // create and get group members
        ChatChannelMember::updateOrCreate(
            ['channel_id' => $group->id, 'user_id' => $adminUser->id],
            ['channel_id' => $group->id, 'user_id' => $adminUser->id, 'is_active' => true]
        );
        ChatChannelMember::updateOrCreate(
            ['channel_id' => $group->id, 'user_id' => $clientUser->id],
            ['channel_id' => $group->id, 'user_id' => $clientUser->id, 'is_active' => true]
        );

        // send message in group
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
