<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Merk extends Model
{
    protected $table = 'merk';
    protected $fillable = [
        'nama_merk',
    ];

    public function category(){
        return $this->belongsTo('App\Category','id_kategori','id');
    }

}
    

