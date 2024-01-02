<?php

namespace App\Http\Resources;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class AdminChannelMessageResource extends JsonResource
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
            'user_id' => $this->user_id,
            'message' => $this->message,
            'is_sent_by_me' => $this->isSentByMe(),
            'timestamp' => Carbon::parse($this->timestamp)->diffForHumans()
        ];
    }

    private function isSentByMe()
    {
        $user = auth()->user();
        $isSentByMe = $user->id === $this->user_id;
        if ($user->role_id == 3) {
            $clientUser = User::where('id', '=', $user->associate_id)->first();
            if ($clientUser && $clientUser === $this->user_id) {
                $isSentByMe = true;
            }
        }

        return $isSentByMe;
    }
}
