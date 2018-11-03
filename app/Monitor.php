<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Monitor extends Model
{
    protected $table = 'tbl_monitor';
    
    protected $fillable = [
        'tinggi',
        'kecepatan',
        'kekeruhan',
    ];

    public function category(){
        return $this->belongsTo('App\Category','id_kategori','id');
    }
    public function merk(){
        return $this->belongsTo('App\Merk','id_merk','id');
    }

}
