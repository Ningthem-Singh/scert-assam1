<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    public function redirectTo()
    {
        $level = Auth::User()->role_id;

        switch ($level) {
            case '1':
                return '/admin/dashboard';
                break;
            case '2':
                return '/teims/dashboard';
                break;
            default:
                return '/login';
                break;
        }
    }
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
