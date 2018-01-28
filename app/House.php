<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    protected $table = "house";
    public $timestamps = false;

    public function infoCar(){
        return $this->belongsTo('App\InfoCar','idCar', 'id');
    }
}
