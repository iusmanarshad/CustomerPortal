<?php

namespace App\Http\Resources;

use App\Enums\ChannelTypeEnum;
use App\Enums\RoleEnum;
use App\Models\ChatChannelMember;
use App\Models\ChatChannelMessage;
use App\Models\User;
use App\Services\ChatService;
use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class AdminChannelResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'slug' => $this->slug,
            'name' => $this->name(),
            'description' => $this->description,
            'last_activity' => $this->lastActivity(),
            'last_message' => $this->latestMessage(),
            'members' => $this->members(),
            'unread_messages' => $this->unreadMessages()
        ];
    }

    private function name()
    {
        $channelName = $this->name;
        if ($this->type === ChannelTypeEnum::ONE_TO_ONE) {
            $members = $this->nonAdminMembers();
            $channelName = $members[0]->first_name . ' ' . $members[0]->last_name;
        }
        return $channelName;
    }

    private function lastActivity()
    {
        return Carbon::parse($this->last_activity)->diffForHumans(null, true);
    }

    private function latestMessage()
    {
        $message = ChatChannelMessage::where('channel_id', '=', $this->id)->latest()->first();
        return $message->message ?? '';
    }

    private function members()
    {
        $members = $this->nonAdminMembers();
        return AdminClientResource::collection($members);
    }

    private function unreadMessages()
    {
        $user = auth()->user();
        if ($user->role_id == 3) {
            $clientUser = User::where('id', '=', $user->associate_id)->first();
        } else {
            $clientUser = $user;
        }
        $membership = ChatChannelMember::query()
            ->where('channel_id', '=', $this->id)
            ->where('user_id', '=', $clientUser->id)
            ->first();

        return $membership->unread_message_count;
    }

    private function nonAdminMembers()
    {
        $groupMembers = (new ChatService())->getChannelMembers($this->id);
        return User::query()
            ->where('role_id', '=', RoleEnum::CLIENTROLE)
            ->whereIn('id', $groupMembers->pluck('user_id')->toArray())
            ->get();
    }
}
