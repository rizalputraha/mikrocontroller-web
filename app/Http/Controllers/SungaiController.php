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

}
