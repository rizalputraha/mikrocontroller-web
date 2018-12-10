<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Monitor;

class GrafikController extends Controller
{
    public function index()
    {
        return view('admin.grafik.index');
    }

     // data-chart untuk tinggi
     public function chartting()
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
