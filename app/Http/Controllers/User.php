<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

class User extends Controller
{
    public function getSingup(){
        return view('user.signup');
    }
    public function store(Request $request){

       $request->validate([
           'email'=>'email|required',
            'password'=>'required|min:4'
        ]);

        $userinput=new \App\User([
            'email'=>$request->input('email'),
            'password'=>$request->input('password')
        ]);

        {{echo $userinput;}}
        $userinput->save();
        return redirect()->route('product.index');
    }
    public function getSingin(){
        return view('user.signin');
    }
    public function storee(Request $request){

        $request->validate([
            'email'=>'email|required',
            'password'=>'required|min:4'
        ]);

        if(Auth::attempt([
            'email'=>Input::get('email'),
            'password'=>Input::get('password')
        ])){
            return redirect()->route('user.profile');
        }
        else{
            return redirect()->back();

        }
    }


    public function egtlogout(){
        Auth::logout();
        return redirect()->back();
    }






    public function getProfile(){
        return view('user.profile');
    }
}
