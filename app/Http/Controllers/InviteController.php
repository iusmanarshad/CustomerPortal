<?php

namespace App\Http\Controllers;

use App\Enums\AssociateStatusEnum;
use App\Enums\ClientInviteStatusEnum;
use App\Enums\ClientStatusEnum;
use App\Enums\RoleEnum;
use App\Models\Invite;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Associate;
use App\Models\ClientInvite;
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

        return view('client-app.associate-signup');
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
            'role_id' => RoleEnum::ASSOCIATE,
            'email_verified_at' => Carbon::now()->toDateTimeString(),
            'status' => ClientStatusEnum::ACTIVE,
        ];

        // create the user with the details from the invite
        User::create($credentials);

        if (Auth::attempt([ 'email' => $invite->email, 'password' => $request->password ])) {
            $request->session()->regenerate();
            Associate::where('email', $invite->email)->update(['status' => AssociateStatusEnum::ACCEPTED]);
            // delete the invite so it can't be used again
            $invite->delete();

            return auth()->user()->role_id == RoleEnum::CLIENTROLE ? redirect('/questionnaire') : redirect('/portal/clients');
        }

        return back()->withErrors([
            'email' => 'Something went wrong!',
        ])->withInput();
    }

    public function showSignupByInviteForm(Request $request)
    {
        $email = $request->email ?? null;
        if (!$email) {
            abort(404);
        }

        $user = User::where('email', $request->email)->where('status', ClientStatusEnum::INVITED)->first() ?? null;
        if (!$user) {
            abort(404);
        }

        return view('client-app.client-signup');
    }

    public function signupByInvite(Request $request)
    {

        $email = $request->email ?? null;
        if (!$email) {
            abort(404);
        }

        $user = User::where('email', $request->email)->where('is_active', 1)->where('status', ClientStatusEnum::INVITED)->first() ?? null;
        if (!$user) {
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

        $credentials = [
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'email_verified_at' => Carbon::now()->toDateTimeString(),
            'status' => ClientStatusEnum::ACTIVE,
        ];

        // Update the user password
        User::updateOrCreate(['email' => $request->email], $credentials);

        if (Auth::attempt([ 'email' => $request->email, 'password' => $request->password ])) {
            $request->session()->regenerate();

            ClientInvite::where('client_id', auth()->user()->id)->update(['status' => ClientInviteStatusEnum::ACCEPTED]);

            return redirect('/questionnaire');
        }

        return back()->withErrors([
            'email' => 'Something went wrong!',
        ])->withInput();
    }

}
