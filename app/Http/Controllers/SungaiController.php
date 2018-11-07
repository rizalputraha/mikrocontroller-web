<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Monitor;

class SungaiController extends Controller
{
    // Menampilkan tabel monitoring sungai
    public function index()
    {
        $mon = Monitor::all();
        return view('admin.sungai.index',compact('mon'));
    }

    //Menampilkan View untuk create data
    public function create()
    {
        return view('admin.sungai.create');
    }

    public function store()
    {
        $request->validate([
            'tinggi' => 'required',
            'kecepatan' => 'required',
            'kekeruhan' => 'required'
        ]);

        Monitor::create($request->all());
        return redirect()->route('barang.index');
    }

    // data-chart untuk tinggi
    public function chart()
    {
        $q = DB::table('tbl_monitor')->select('tinggi');
        $result = $q->addSelect('created_at')
                    ->whereYear('created_at','=',2018)
                    ->get();
        return response()->json($result);
    }

    // data-chart untuk kecepatan
    public function chartkec()
    {
        $q = DB::table('tbl_monitor')->select('kecepatan');
        $result = $q->addSelect('created_at')
                    ->whereYear('created_at','=',2018)
                    ->get();
        return response()->json($result);
    }

     // data-chart untuk kekeruhan
     public function chartker()
     {
         $q = DB::table('tbl_monitor')->select('kekeruhan');
         $result = $q->addSelect('created_at')
                     ->whereYear('created_at','=',2018)
                     ->get();
         return response()->json($result);
     }
}
