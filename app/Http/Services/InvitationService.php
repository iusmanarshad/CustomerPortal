<?php

namespace App\Http\Services;

use App\Models\Invite;
use App\Mail\InviteCreated;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class InvitationService
{
    public function process($email, $invitedBy)
    {
        do {
            //generate a random string using Laravel's str_random helper
            $token = Str::random(16);
        } //check if the token already exists and if it does, try again
        while (Invite::where('token', $token)->first());

        //create a new invite record
        $invite = Invite::create([
            'email' => $email,
            'token' => $token,
            'invited_by' => $invitedBy
        ]);

        // send the email
        Mail::to($email)->send(new InviteCreated($invite));

        // redirect back where we came from
        return true;
    }
}
