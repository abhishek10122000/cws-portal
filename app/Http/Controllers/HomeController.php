<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class HomeController extends Controller
{
    public function course(){
        $data['course']=Course::paginate(6);
        return view('home',$data);
    }
    public function view($id){
        $data['item']=Course::find($id);
        return view('admin.viewCourse',$data);
    }
}
