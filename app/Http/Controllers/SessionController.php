<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    function putSession(Request $request){
        $request->session()->put('sessionDiep','good');
        echo "Set up Session sessionDiep";
    }
    function checkSession(Request $request){
        if($request->session()->has('sessionDiep')){
            echo "Had Session sessionDiep"."<br>";
            echo "It's ".$request->session()->get('sessionDiep');
        }
        else{
            echo "Had not Session sessionDiep";
        }
    }
}
