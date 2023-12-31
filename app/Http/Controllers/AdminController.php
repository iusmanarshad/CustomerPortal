<?php

namespace App\Http\Controllers;

use App\Enums\ChannelTypeEnum;
use App\Enums\RoleEnum;
use App\Models\ChatChannel;
use App\Models\ChatChannelMember;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $clients = User::where('role_id', RoleEnum::CLIENTROLE)->get();
        return view('customer-portal.index', compact('clients'));
    }

    public function getStatistics()
    {
        $clients = User::where('role_id', '=', RoleEnum::CLIENTROLE)->count();
        $announcements = ChatChannel::where('type', '=', ChannelTypeEnum::ANNOUNCEMENT)->count();
        $chats = ChatChannel::where('type', '=', ChannelTypeEnum::ONE_TO_ONE)->count();
        $unreadMessage = $this->unreadMessageCount(auth()->user());

        return [
            'clients' => $clients,
            'announcements' => $announcements,
            'chats' => $chats,
            'unread_messages' => $unreadMessage,
        ];
    }

    private function unreadMessageCount($user)
    {
        $unreadMessages = 0;

        $memberships = ChatChannelMember::where('user_id', '=', $user->id)->get();
        foreach ($memberships as $membership) {
            $channel = ChatChannel::find($membership->channel_id);
            if ($channel) {
                if ($channel->type === ChannelTypeEnum::ONE_TO_ONE) {
                    $unreadMessages = $unreadMessages + $membership->unread_message_count;
                }
            }
        }

        return $unreadMessages;
    }
}
