<?php

namespace App\Http\Controllers;

use App\Enums\RoleEnum;
use App\Models\Invite;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Associate;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class InviteController extends Controller
{

    public function index(Request $request)
    {
        $token = $request->token ?? null;
        if (!$token) {
            abort(404);
        }
        $invite = Invite::where('token', $token)->first() ?? null;
        // Look up the invite
        if (!$invite) {
            //if the invite doesn't exist do something more graceful than this
            abort(404);
        }

        return view('client-app.signup');
    }


    public function signup(Request $request)
    {

        $token = $request->token ?? null;
        $invite = Invite::where('token', $token)->first() ?? null;

        // Look up the invite
        if (!$invite) {
            //if the invite doesn't exist do something more graceful than this
            abort(404);
        }

        $validator = Validator::make($request->all(), [
            'password' => 'required|min:8|confirmed',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }

        $user = User::where('email', $request->invited_by)->first() ?? null;
        $associate = Associate::where('email', $request->email)->first() ?? null;
        $credentials = [
            'email' => $invite->email,
            'password' => bcrypt($request->password),
            'associate_id' => $user ? $user->id : null,
            'first_name' => $associate ? $associate->first_name : null,
            'last_name' => $associate ? $associate->last_name : null,
            'role_id' => RoleEnum::CLIENTROLE,
            'email_verified_at' => Carbon::now()->toDateTimeString(),
        ];

        // create the user with the details from the invite
        User::create($credentials);

        if (Auth::attempt([ 'email' => $invite->email, 'password' => $request->password ])) {
            $request->session()->regenerate();
            Associate::where('email', $invite->email)->update(['status' => 'accepted']);
            // delete the invite so it can't be used again
            $invite->delete();

            return auth()->user()->role_id == RoleEnum::CLIENTROLE ? redirect('/questionnaire') : redirect('/portal/clients');
        }

        return back()->withErrors([
            'email' => 'Something went wrong!',
        ])->withInput();
    }

}
