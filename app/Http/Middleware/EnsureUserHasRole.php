<?php

namespace App\Http\Middleware;

use Closure;

class EnsureUserHasRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle($request, Closure $next, ...$roles)
    {
        if ($request->user()) {
            foreach ($roles as $key => $role) {
                if (!empty($role) && $request->user()->hasRole($role)) {
                    return $next($request);
                }
            }
        }

        if (auth()->user()) {
            if (auth()->user()->role_id == 1) {
                return redirect('/portal/clients');
            } elseif (auth()->user()->role_id == 2) {
                return redirect('/questionnaire');
            }
        }

        // Redirect...
        return redirect()->route('login');
    }
}
