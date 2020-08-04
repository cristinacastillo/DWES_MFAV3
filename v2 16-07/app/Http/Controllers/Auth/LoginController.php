<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;

use Illuminate\Http\Request;
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

    //protected $redirectTo = RouteServiceProvider::HOME;
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * If we want to perform a check after the user login,
     * we must overload this method and add the necessary
     * logic to it. In this case, we want to redirect the
     * swaur according to its profile.
     *
     * @param Request $req
     * @param  $user
     *
     * @return void
     */
    public function authenticated(Request $req, $user)
    {
        // Tell don't ask
        if ($user->isAdmin()) 

            return redirect()->route('admin') ;
        
        //
        return redirect()->route('dogs.list') ;
    }

    /**
     * this function closes session and
     * redirects where we want
     *
     * @return void
     */
    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }

}
