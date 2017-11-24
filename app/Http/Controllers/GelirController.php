<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class GelirController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $listele = DB::table('gelir')->get()->all();
        return view('gelir.index' , ['listele' => $listele]);
    }

    public function create()
    {
        return view('gelir.create');
    }

    public function store(Request $request)
    {
        DB::table('gelir')->insert([
            'gelir_adi' => $request->gelir_adi,
            'gelir_tutari' => $request->gelir_tutari,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d')
        ]);
        return redirect('/gelir');
    }

    public function destroy($id)
    {
        DB::Table('gelir')->where('id' , $id)->delete();
        return redirect('/gelir');
    }

}
