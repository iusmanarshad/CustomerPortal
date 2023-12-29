<?php

namespace App\Http\Resources;

use App\Enums\QuestionsEnum;
use App\Models\ClientQuestionnaire;
use App\Models\Question;
use Illuminate\Http\Resources\Json\JsonResource;

class ClientResource extends JsonResource
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
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'phone' => $this->getClientPhone(),
            'owner_name' => $this->owner_name,
            'email' => $this->email,
            'status' => $this->status,
            'is_active' => $this->is_active == 1,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }

    private function getClientPhone()
    {
        $phone = '';
        $phoneQuestion = Question::where('key', QuestionsEnum::PhoneQuestion)->first() ?? null;
        if ($phoneQuestion) {
            $clientQuestionnaire = ClientQuestionnaire::where('client_id', $this->id)->where('question_id', $phoneQuestion->id)->first();
            if ($clientQuestionnaire) {
                $phone = $clientQuestionnaire->answer;
            }
        }
        return $phone;
    }
}
