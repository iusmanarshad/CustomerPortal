<?php

namespace App\Http\Services;

use App\Models\Associate;
use App\Models\Invite;
use App\Mail\InviteAssociate;
use App\Models\User;
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

        $invitedUser = Associate::where('email', '=', $email)->first();
        $invitedByUser = User::where('email', '=', $invitedBy)->first();

        // create a new invite record
        $invite = Invite::create([
            'email' => $email,
            'token' => $token,
            'invited_by' => $invitedBy
        ]);

        $data = [
            'token' => $token,
            'email' => $invitedUser->email,
            'name' => $invitedUser->first_name,
            'invited_by_name' => $invitedByUser->first_name . ' ' . $invitedByUser->last_name,
            'invited_by_email' => $invitedByUser->email
        ];

        // send the invitation email
        Mail::to($email)->send(new InviteAssociate($data));

        // redirect back where we came from
        return true;
    }
}
