<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth; // same with use Auth
use resources;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
//use Auth;
use App\User;

class MyLogController extends Controller
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

    //use AuthenticatesUsers;

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

    public function authenticate(Request $request)
    {

      
        $custcod = $request->input('custcod');
        $password = $request->input('password');
        if (Auth::attempt(['custcod' => $custcod, 'password' => $password])) {
            // Authentication passed...
            $id = Auth::id();
             $users = DB::table('users')
                 ->where('users.id',$id)
                 ->get();
                 return redirect()->route('home',['users' => $users ]);
           
        } else{

                $erreur=("Code utilisateur ou mot de passe incorrect");
                return view('login2',['erreur' => $erreur ]);
              }
   
    }

}
