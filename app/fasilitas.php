<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fasilitas extends Model
{
    protected $table='fasilitas';
    protected $fillable=['nama_fasilitas','keterangan'];

    public $timestamps=true;

    public function gallery(){
        return $this->hasMany('App\gallery','fasilitas');

    }
}
