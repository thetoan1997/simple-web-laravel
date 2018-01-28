<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    protected $table = "Comment";
    
    public function tintuc(){
        return $this->belongsTo('App\TinTuc','idTintTuc','id');
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
            $obj = "$m min";
        }else if($d == 0){
            $obj = "$h h";
        }else if($M == 0){
            $obj =  "$d d";
        }
        return $obj;
    }
}
