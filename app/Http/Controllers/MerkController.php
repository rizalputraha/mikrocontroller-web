<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Merk;
use App\Barang;
use App\Category;

class MerkController extends Controller
{

    public function __construct()
    {
        $merk = Merk::all();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $merk = Merk::with('category')->get();
        return view('admin.merk.index',compact('merk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        $merk = Merk::all();
        $category = Category::all(['id', 'name']);
        return view('admin.merk.create',compact('category','merk'));
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
            'nama_merk' => 'required',
        ]);

        Merk::create($request->all());
        return redirect()->route('merk.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $merk = Merk::with('category')->get();
        $sp_barang = DB::table('barang')
                        ->join('merk','barang.id_merk','=','merk.id')
                        ->join('category','barang.id_kategori','=','category.id')
                        ->select('barang.*','merk.nama_merk','category.name')
                        ->where('barang.id_merk',$id)
                        ->get();
        return view('admin.detail.index',compact('sp_barang','merk'));
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
        $m = Merk::find($id);
        return view('admin.merk.edit',compact('m','merk'));
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
            'nama_merk' => 'required',
        ]); 
        Merk::find($id)->update($request->all());
        return redirect()->route('merk.index')
                         ->with('success','Merk telah terupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Merk::find($id)->delete();
        return redirect()->route('merk.index')
                         ->with('success','Merk Telah Terhapus');
    }
}
