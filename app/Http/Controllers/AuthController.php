<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Auth;

class AuthController extends Controller
{
    public function index(){
        return view('admin.dashboard');
    }
    public function adminLogin(Request $req){
        if($req->isMethod('post')){
            $data=$req->only("email","password");
            if(Auth::guard('admin')->attempt($data)){
                return redirect()->route('admin');
            }
            else{
                return redirect()->route('adminlogin');
            }
        }
        return view('admin.adminlogin');
    }
}
