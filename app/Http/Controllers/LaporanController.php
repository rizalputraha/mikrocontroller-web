<?php

namespace App\Http\Controllers;

use PDF;
use Illuminate\Http\Request;
use App\Barang;
use App\Merk;
use App\Transaction;
use Illuminate\Support\Facades\DB;

class LaporanController extends Controller
{
    public function barang()
    {
        $merk = Merk::all();
        $barang = Barang::with('category','merk')->get();
        return view('admin.laporan.barang',compact('barang','merk'));
    }

    public function transaksi()
    {
        $merk = Merk::all();
        $trans = Transaction::with('barang')->get();
        return view('admin.laporan.transaksi',compact('trans','merk'));
    }

    public function masuk()
    {
        $merk = Merk::all();
        $trans = DB::table('transaction')
                    ->join('merk','transaction.id_merk','=','merk.id')
                    ->where('jenis_transaksi','Barang Masuk')
                    ->get();
        return view('admin.laporan.masuk',compact('trans','merk'));
    }

    public function keluar()
    {
        $merk = Merk::all();
        $trans = DB::table('transaction')
                    ->join('merk','transaction.id_merk','=','merk.id')
                    ->where('jenis_transaksi','Barang Keluar')
                    ->get();
        return view('admin.laporan.keluar',compact('trans','merk'));
    }
}
