<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class RaporController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $dbDate = date('Y-m-d H:i:s', strtotime(date('Y-m-d H:i:s'). '-7 days'));



        $gelir = DB::table('gelir')->select('id','gelir_tutari','created_at')->where('created_at','>',$dbDate)->orWhere('created_at','=',$dbDate)->orderBy('created_at')->get()->all();

        $gelirCollaction = collect($gelir);

        $gelirCollaction =  $gelirCollaction->groupBy('created_at');

        $returnGelir  = [];

        foreach ($gelirCollaction as $k => $v)
        {
            $returnGelir[$k] = $v->sum('gelir_tutari');
        }

        $gider = DB::table('gider')->select('id','gider_tutari','created_at')->where('created_at','>',$dbDate)->orWhere('created_at','=',$dbDate)->orderBy('created_at')->get()->all();


        $gelirCollaction = collect($gider);

        $gelirCollaction =  $gelirCollaction->groupBy('created_at');

        $returnGider  = [];

        foreach ($gelirCollaction as $k => $v)
        {
            $returnGider[$k] = $v->sum('gider_tutari');
        }




        return view('raporlar.index' , [
            'gelirChart' => $returnGelir,
            'giderChart' => $returnGider
        ]);
    }


}
