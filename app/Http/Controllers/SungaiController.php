<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SungaiController extends Controller
{
    public function index()
    {
        $mon = Monitor::all();
        return view('admin.sungai.index','mon');
    }

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
