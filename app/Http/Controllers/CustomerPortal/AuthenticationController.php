<?php

namespace App\Http\Controllers\CustomerPortal;

use App\Enums\ClientInviteStatusEnum;
use App\Enums\ClientStatusEnum;
use App\Enums\RoleEnum;
use App\Http\Controllers\Controller;
use App\Models\ClientInvite;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthenticationController extends Controller
{
    public function login()
    {
        // Check if the user is authenticated
        if (Auth::check()) {
            // User is authenticated, redirect to dashboard
            if (auth()->user()->role_id == RoleEnum::ADMINROLE) {
                return redirect()->route('portal.dashboard');
            } elseif(auth()->user()->role_id == RoleEnum::CLIENTROLE) {
                return redirect()->route('dashboard');
            } else {
                return redirect('/announcements');
            }
        }
        return view('customer-portal.login');
    }

    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function authenticate(Request $request)
    {
        $user = User::where('email', $request->email)->first() ?? null;

        if ($user && ($user->role_id == RoleEnum::CLIENTROLE || $user->role_id == RoleEnum::ASSOCIATEROLE) && $user->is_active != 1) {
            return back()->withErrors([
                'email' => 'Your account has been blocked by admin.',
            ])->onlyInput('email');
        }

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            if (auth()->user()->role_id == RoleEnum::CLIENTROLE || auth()->user()->role_id == RoleEnum::ASSOCIATEROLE) {
                $user->status = ClientStatusEnum::ACTIVE;
                $user->save();
            }
            if (auth()->user()->role_id == RoleEnum::CLIENTROLE) {
                return redirect()->route('dashboard');
            } elseif (auth()->user()->role_id == RoleEnum::ADMINROLE) {
                return redirect()->route('portal.dashboard');
            } else {
                return redirect('/announcements');
            }
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
