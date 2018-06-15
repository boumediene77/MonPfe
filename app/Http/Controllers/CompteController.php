<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use resources;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Auth;
// pour les stats
use Khill\Lavacharts\Lavacharts;

class CompteController extends Controller
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
      //  $current_user = DB::table('users')->where('id', $id);
        $users = DB::table('users')
            ->join('comptes', 'users.id', '=', 'comptes.client_id')
            ->join('versements', 'users.id', '=', 'versements.client_id')
            ->whereRaw('comptes.id_compte=versements.id_compte')
            ->where('users.id',$id)
            ->get();
        
         /*   $finances = \Lava::DataTable();
            $finances->addStringColumn('Mois')
                     ->addNumberColumn('CA');
     
            $finances->addRow([jan-2016,  rand(1000,5000)])
            ->addRow([fév-2016,  rand(1000,5000)])
            ->addRow([mar-2016,  rand(1000,5000)]);
            
            \LAVA::ColumnChart('Finances', $finances, [
                'title' => 'Chiffre d\'affaire',
                'titleTextStyle' => [
                    'color'    => '#eb6b2c',
                    'fontSize' => 14
                ]
            ]);*/
        
        return view('compte',  ['users' => $users]
                   );
    }

    
}
