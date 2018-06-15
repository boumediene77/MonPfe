<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;

use resources;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Auth;

class ChargementController extends Controller
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
            ->join('chargements', 'chargements.id_carte', '=', 'cartes_corporate.id_carte')
            ->where('users.id',$id)
            ->get();
        /*
            $charg = DB::table('chargements')->get();
            $consomations = DB::table('consomations')->get();
            $cartes = DB::table('cartes_corporate')->get();
        */   

        $date_max = DB::table('chargements')->max('date_chargement');
        $date_min = DB::table('chargements')->min('date_chargement');
        //->select(DB::raw('YEAR(tr_visit.Visit_Date)'))

       $max_year = Carbon::createFromFormat('Y-m-d H:i:s', $date_max)->year;
       $min_year = Carbon::createFromFormat('Y-m-d H:i:s', $date_min)->year;
       // dd($year);

      // $data=retrieve_stat_data($min_year,$max_year);
      $data = array();
      for ($i = $min_year; $i <= $max_year ; $i++) {

          $data[$i-$min_year][0]=$i;

          for ($j=1; $j <= 12; $j++) { 

            $data[$i-$min_year][$j] = DB::table('chargements')
                                  ->whereMonth('date_chargement', $j)
                                  ->whereYear('date_chargement', $i)
                                  ->sum('montant_chargement');
          }
      }
        
        return view('chargement',  compact('users'), ['data' => $data]);


    }

    public function retrieve_stat_data($min_year, $max_year)
    {
        $tab = array();
        for ($i = $min_year; $i <= $max_year ; $i++) {

            $tab[$i-$min_year][0]=$i;

            for ($j=1; $j <= 12; $j++) { 

              $tab[$i-$min_year][j] = DB::table('chargements')
                                    ->whereMonth('date_chargement', $j+1)
                                    ->whereYear('date_chargement', $i)
                                    ->sum('montant_chargement');
            }
        }

      return $tab;
    }
}
