<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use resources;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Auth;
class NEmailController extends Controller
{
    //
    public function __construct()
   {
       $this->middleware('auth');
   }

   public function index()
   {
       $id = Auth::id();
       $users = DB::table('users')
       ->where('users.id',$id)
       ->get();
      

       return view('nemail', ['users' => $users ]);
   }
}
