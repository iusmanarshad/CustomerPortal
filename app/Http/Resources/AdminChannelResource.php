<?php

namespace App\Http\Resources;

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
            'members' => $this->members()
        ];
    }

    private function name()
    {
        $channelName = $this->name;
        if ($this->type === 'one-to-one') {
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

    private function nonAdminMembers()
    {
        $groupMembers = (new ChatService())->getChannelMembers($this->id);
        return User::query()
            ->where('role_id', '=', RoleEnum::CLIENTROLE)
            ->whereIn('id', $groupMembers->pluck('user_id')->toArray())
            ->get();
    }
}
