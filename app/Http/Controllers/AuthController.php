<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index(){
        return view('admin.dashboard');
    }
    public function signup(Request $req){
    
    }
}
