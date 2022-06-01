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

    /**
     * Where to redirect users after login.
     *
     * @var string
     */

// redirect to
    protected $redirectTo=RouteServiceProvider::DASHBOARD;



    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    
    public function redirectTo()
    {

        switch(Auth::user()->role){

               case 1:
                    $this->redirectTo = 'admin/dashboard';
                    return $this->redirectTo;
                    break;
                  
                default:
                    $this->redirectTo = '/login';
                    return $this->redirectTo;
    }

    }

}