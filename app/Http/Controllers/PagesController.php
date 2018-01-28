<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TinTuc;
use App\User;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    //
    // function __construct(){
        
    //     if(Auth::check()){
    //         view()->share('userr',Auth::user());
    //     }
    // }
    function tinTuc(){
        $tintuc= TinTuc::all();
        return view('pages.trangchu',['tintuc'=>$tintuc]);
    }

    function getLogin(){
        return view('pages.login');
    }
    function postLogin(Request $request){
        $this->validate($request,[
            'email'=>'required',
            'password'=>'required|min:3|max:32'
            ],[
            'email.required'=>'Please input your email',
            'password.required'=>'Please input your password',
            'password.min'=>'Password is too short',
            'password.max'=>'Password is too long'
        ]);

        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password])){
            return redirect('trangchu');
        }else{
            echo $request->email."<br>";
            echo $request->password;
            echo "Failed";
            // return redirect('login')->with('thongbao','Login failed');
        }
    }
    function getLogout(){
        Auth::logout();
        return redirect('trangchu');
    }

    function getDangki(){
        return view('pages.dangki');
    }
    function postDangki(Request $request){
        $this->validate($request,[
            'name' => 'required|min:3',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:3|max:32',
            'passwordConfirm' => 'required|same:password'
        ],[
            'name.required' => 'Please input your name, sir',
            'name.min' => 'Name is too short, sir',
            'email.required' => 'Please input your email, sir',
            'email.email' => 'Input email NOT name, sir',
            'email.unique' => 'Please input another email, sir',
            'password.required' => 'required|min:3|max:32',
            'password.min' => 'Password is too short, sir',
            'password.max' => 'Password is too long, sir',
            'passwordConfirm.required' => 'Please input password again, sir',
            'passwordConfirm.same' => 'It is not your password , sir'
        ]);
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        if($request->hasFile('pictureAva')){
            $file= $request->file('pictureAva');
            $name= $file->getClientOriginalName();
            $hinh = str_random(3)."_".$name;
            while(file_exists("img/".$hinh)){
                $hinh = str_random(4)."_".$name;
            }
            $file->move("img",$hinh);
            $user->image=$hinh;
        }else{
            $user->image="";
        }
        $user->save();
        return redirect('dangki')->with('thongbao','Signed up successful');
    }
}
