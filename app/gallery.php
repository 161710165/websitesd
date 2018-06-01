<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class gallery extends Model
{
    protected $table='gallery';
    protected $fillable=['nama_fasilitas','keterangan'];

    public $timestamps=true;

    public function fasilitas(){
        return $this->belongTo('App\fasilitas','fasilitas-id');
}
}

