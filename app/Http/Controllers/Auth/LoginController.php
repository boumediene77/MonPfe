<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use resources;
use Illuminate\Support\Facades\DB;
use App\User;
use Auth;


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

    public function index()
    {
        if (Auth::attempt(['custcod' => $custcod, 'password' => $password])) {
            // Authentication passed...
            return redirect()->intended('home');
        }
        
      //  $custcod = $request->input('custcod');

        //->whereRaw('shares.user_id=followers.follower_id')
       // return view('home');
    }
}
