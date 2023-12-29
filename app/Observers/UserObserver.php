<?php

namespace App\Observers;

use App\Enums\RoleEnum;
use App\Models\ClientQuestionnaire;
use App\Models\Question;
use App\Models\User;

class UserObserver
{
    /**
     * Handle the User "created" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function created(User $user)
    {
        if ($user->role_id == RoleEnum::CLIENTROLE) {
            $firstNameQuestion = Question::where('key', 'first_name')->first() ?? null;
            $lastNameQuestion = Question::where('key', 'last_name')->first() ?? null;
            $emailQuestion = Question::where('key', 'email')->first() ?? null;

            ClientQuestionnaire::create([
                'client_id' => $user->id,
                'question_id' => $firstNameQuestion->id,
                'answer' => $user->first_name,
            ]);
            ClientQuestionnaire::create([
                'client_id' => $user->id,
                'question_id' => $lastNameQuestion->id,
                'answer' => $user->last_name,
            ]);
            ClientQuestionnaire::create([
                'client_id' => $user->id,
                'question_id' => $emailQuestion->id,
                'answer' => $user->email,
            ]);
        }

    }

    /**
     * Handle the User "updated" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function updated(User $user)
    {
        //
    }

    /**
     * Handle the User "deleted" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function deleted(User $user)
    {
        //
    }

    /**
     * Handle the User "restored" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function restored(User $user)
    {
        //
    }

    /**
     * Handle the User "force deleted" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function forceDeleted(User $user)
    {
        //
    }
}
