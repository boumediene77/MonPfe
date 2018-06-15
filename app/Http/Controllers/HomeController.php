<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use resources;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Auth;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
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
            return view('home', ['users' => $users ]);
            
        }
}
