<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Barang;
use App\Category;
use App\Merk;


class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $merk = Merk::all();
        $barang = Barang::with('category','merk')->get();
        return view('admin.products.index',compact('barang','merk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
        $merk = Merk::all();
        return view('admin.products.create',compact('category','merk'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'stok' => 'required',
            'id_kategori' => 'required',
            'id_merk' => 'required'
        ]);

        Barang::create($request->all());
        return redirect()->route('barang.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $merk = Merk::all();
        $barang = Barang::find($id);
        $category = Category::all();
        return view('admin.products.edit',compact('barang','merk','category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'stok' => 'required',
            'id_kategori' => 'required',
            'id_merk' => 'required'
        ]); 
        Barang::find($id)->update($request->all());
        return redirect()->route('barang.index')
                         ->with('success','Barang telah terupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Barang::find($id)->delete();
        return redirect()->route('barang.index')
                         ->with('success','Barang Telah Terhapus');
    }
}
