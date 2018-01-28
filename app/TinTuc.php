<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TinTuc extends Model
{
    //
    protected $table = "TinTuc";
    
    public function comment(){
        return $this->hasMany('App\Comment','idTinTuc','id');
    }

    public function user(){
        return $this->belongsTo('App\User','idUser','id');
    }
    function seconds2human($ss) {
        $m = floor(($ss%3600)/60);
        $h = floor(($ss%86400)/3600);
        $d = floor(($ss%2592000)/86400);
        $M = floor($ss/2592000);
        $obj = "$M months, $d days, $h hours $m minutes";
        if($h == 0){
            $obj = "$m minutes";
        }else if($d == 0){
            $obj = "$h hours $m minutes";
        }else if($M == 0){
            $obj =  "$d days $h hours";
        }
        return $obj;
    }
}
