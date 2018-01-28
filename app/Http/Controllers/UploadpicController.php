<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TinTuc;
use Illuminate\Support\Facades\Auth;

class UploadpicController extends Controller
{
    //
    function upPicture(Request $request){
        $this->validate($request,[
            'NoiDung' => 'required'
        ],[
            'NoiDung.required'=>'Ban chua dien noi dung'
        ]);
        $tintuc = new TinTuc;
        $tintuc->idUser=Auth::user()->id;
        $tintuc->Link= "aaa";
        $tintuc->NoiBat = 1;
        $tintuc->SoLuotXem= 200;
        $tintuc->NoiDung= $request->NoiDung;
        if($request->hasFile('picture')){
            $file= $request->file('picture');
            $name= $file->getClientOriginalName();
            $hinh = str_random(3)."_".$name;
            while(file_exists("img/".$hinh)){
                $hinh = str_random(4)."_".$name;
            }
            $file->move("img",$hinh);
            $tintuc->Image=$hinh;
        }else{
            $tintuc->image="";
        }
        $tintuc->save();
        return redirect('trangchu');
    }
}
