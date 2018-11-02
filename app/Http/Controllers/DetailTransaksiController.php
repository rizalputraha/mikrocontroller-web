<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\Barang;
use App\Category;
use App\Merk;

class DetailTransaksiController extends Controller
{
    
    public function masuk(){
        $barang = Barang::with('category','merk')->get();
        
        return view('admin.products.masuk',compact('barang'));   
    }

    public function keluar(){
        $barang = Barang::with('category','merk')->get();

        return view('admin.products.keluar',compact('barang'));
    }

    public function create()
    {
        $category = Category::all();
        $merk = Merk::all();
        return view('admin.products.create-masuk',compact('category','merk'));
    }

    public function createKeluar()
    {
        $category = Category::all();
        $merk = Merk::all();
        return view('admin.products.create-keluar',compact('category','merk'));
    }

    public function prosesMasuk(Request $request){
        $request->validate([
            'stok' => 'required',
            'id_kategori' => 'required',
            'id_merk' => 'required'
        ]);
        
        $kat = Input::get('id_kategori');
        $merk = Input::get('id_merk');
        $stok = Input::get('stok');
        $date = date('Y-m-d H:m:s');

        $q = DB::table('barang')
                ->where([
                    ['id_kategori',$kat],
                    ['id_merk',$merk]
                ])
                ->increment('stok',$stok);
        $qu = DB::table('barang')
                ->where([
                    ['id_kategori',$kat],
                    ['id_merk',$merk]
                ])
                ->update(['updated_at' => $date]);
        return redirect()->route('barang-masuk');
    }

    public function prosesKeluar(Request $request){
        $request->validate([
            'stok' => 'required',
            'id_kategori' => 'required',
            'id_merk' => 'required'
        ]);
        $kat = Input::get('id_kategori');
        $merk = Input::get('id_merk');
        $stok = Input::get('stok');
        $date = date('Y-m-d H:i:s');


        $q = DB::table('barang')
                ->where([
                    ['id_kategori',$kat],
                    ['id_merk',$merk]
                ])
                ->update(['stok' => DB::raw('GREATEST(stok - '.$stok.',0)')]);
        $qu = DB::table('barang')
                ->where([
                    ['id_kategori',$kat],
                    ['id_merk',$merk]
                ])
                ->update(['updated_at' => $date]);        
        return redirect()->route('barang-keluar');
    }
}
