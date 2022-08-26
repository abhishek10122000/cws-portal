<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class UserauthController extends Controller
{
    public function signUp(Request $req){
        if($req->isMethod('post')){
            $data=$req->validate([
                'name'=>'required',
                'email'=>'required',
                'password'=>'required',
            ]);
            User::create($data);
            return redirect()->route('login');
        }
        return view('auth.signup');
    }
    public function login(Request $req){
        if($req->isMethod('post')){
            $auth=$req->only('email','password');
            if(Auth::guard('web')->attempt($auth)){
                return redirect()->route('home');
            }
            else{
                return redirect()->route('login');
            }
        }
        return view('auth.login');
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
