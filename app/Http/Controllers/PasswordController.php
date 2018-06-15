<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Auth;
use resources;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class PasswordController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::id();
        $users = DB::table('users')
        ->where('users.id',$id)
        ->get();
       

        return view('password', ['users' => $users ]);
    }

    public function changePassword(Request $request){
        if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
        // The passwords matches
        return redirect()->back()->with("error","Mot de passe incorrect . réessayer svp.");
        }
        if(strcmp($request->get('current-password'), $request->get('new-password')) == 0){
        //Current password and new password are same
        return redirect()->back()->with("error","Le nouveau mot de passe doit etre different du mot de passe actuel");
        }
        $validatedData = $request->validate([
        'current-password' => 'required',
        'new-password' => 'required|string|min:6|confirmed',
        ]);
        //Change Password
        $user = Auth::user();
        $user->password = bcrypt($request->get('new-password'));
        $user->save();
        return redirect()->back()->with("success","Password changed successfully !");
        //return view('password');
        }

      

}
