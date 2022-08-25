<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['course']=Course::all();
        return view('admin.manageCourses',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.addcourse");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->isMethod('post')){
            $data=$request->validate([
                'title'=>'required',
                'duration'=>'required',
                'price'=>'required',
                'discount_price'=>'required',
                'image'=>'required',
                'description'=>'required',
            ]);
            $filename=$request->image->getClientOriginalName();
            $request->image->move(public_path("image"),$filename);
            $data['image']=$filename;
            Course::create($data);
            return redirect()->route('course.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        $data['item']=$course;
        return view('admin.viewCourse',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        $data['course']=$course;
        return view('admin.editCourse',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        
        $data=$request->validate([
            'title'=>'required',
            'duration'=>'required',
            'price'=>'required',
            'discount_price'=>'required',
            // 'image'=>'required',
            'description'=>'required',
        ]);
        // $filename=$request->image->getClientOriginalName();
        // $request->image->move(public_path("image"),$filename);
        // $data['image']=$filename;
        $course->update($data);
        return redirect()->route('course.index');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        $course->delete();
        return redirect()->back();
    }
}
