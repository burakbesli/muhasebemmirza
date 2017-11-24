<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class GiderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $listele = DB::table('gider')->get()->all();
        return view('gider.index' , ['listele' => $listele]);
    }

    public function create()
    {
        return view('gider.create');
    }

    public function store(Request $request)
    {
        DB::table('gider')->insert([
            'gider_adi' => $request->gider_adi,
            'gider_tutari' => $request->gider_tutari,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d')
        ]);
        return redirect('/gider');
    }

    public function destroy($id)
    {
        DB::Table('gider')->where('id' , $id)->delete();
        return redirect('/gider');
    }

}
