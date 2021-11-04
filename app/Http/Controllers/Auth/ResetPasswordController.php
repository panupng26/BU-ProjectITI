<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ResetsPasswords;
use App\Models\User;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;
    protected function redirectTo(){
        if(Auth()->user()->login_level == 0)
        {
            return route('admin.dashboard');
        }else if(Auth()->user()->login_level == 1)
        {
            return route('student.dashboard');
        }else if(Auth()->user()->login_level == 2)
        {
            return route('teacher.dashboard');
        }else if(Auth()->user()->login_level == 3)
        {
            return route('private.dashboard');
        }
    }
}
