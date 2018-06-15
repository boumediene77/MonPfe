<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use resources;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Auth;


class ConsomationController extends Controller
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
            ->join('comptes', 'users.id', '=', 'comptes.client_id')
            ->join('cartes_corporate', 'cartes_corporate.id_compte_client', '=', 'comptes.id_compte')
            ->join('consomations', 'consomations.id_carte', '=', 'cartes_corporate.id_carte')
            ->join('chargements', 'chargements.id_carte', '=', 'cartes_corporate.id_carte')
            ->where('users.id',$id)
            ->get();
        /*
            $charg = DB::table('chargements')->get();
            $consomations = DB::table('consomations')->get();
            $cartes = DB::table('cartes_corporate')->get();
        */    
        
        return view('consomation',  ['users' => $users]);
    }
}
