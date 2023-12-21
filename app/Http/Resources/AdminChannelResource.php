<?php

namespace App\Http\Resources;

use App\Models\ChatChannelMember;
use App\Models\User;
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
            'name' => $this->name,
            'description' => $this->description,
            'last_activity' => $this->lastActivity(),
            'members' => $this->members()
        ];
    }

    private function lastActivity()
    {
        return Carbon::parse($this->last_activity)->diffForHumans(null, true);
    }

    private function members()
    {
        $groupMembers = ChatChannelMember::where('channel_id', '=', $this->id)->get();
        $members = User::where('role_id', '=', 2)->whereIn('id', $groupMembers->pluck('user_id')->toArray())->get();
        return AdminClientResource::collection($members);
    }
}
