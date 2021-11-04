<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  ...$guards
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            // if (Auth::guard($guard)->check()) {
            //     //return route('admin.login');
            //     return redirect(RouteServiceProvider::HOME);
            // }
            if(Auth::guard($guard)->check() && Auth::user()->login_level == 0)
            {
                return redirect()->route('admin.dashboard');
            }else if(Auth::guard($guard)->check() && Auth::user()->login_level == 1)
            {
                return redirect()->route('student.dashboard');
            }else if(Auth::guard($guard)->check() && Auth::user()->login_level == 2)
            {
                return redirect()->route('teacher.dashboard');
            }else if(Auth::guard($guard)->check() && Auth::user()->login_level == 3)
            {
                return redirect()->route('private.dashboard');
            }
        }

        return $next($request);
    }
}
