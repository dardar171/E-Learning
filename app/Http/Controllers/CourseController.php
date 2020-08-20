<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\Lecture;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses=Course::all();
        return view('courses.index',compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('courses.create');
    }

    public function createLecture($id)
    {
        $course = Course::find($id);
        return view('lecture/new',compact('course'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $course=new Course();
        $course->title=$request->input('title');
        $course->description=$request->input('description');
        $course->save();
        return redirect()->route('courses.index');
    }

    public function storeLecture(Request $request,$id)
    {
        $course = Course::find($id);
        $lecture = new Lecture();
        $lecture->videoUrl=$request->input('videoUrl');
        $lecture->body=$request->input('body');
        $lecture->title=$request->input('title');
        $course->lectures()->save($lecture);
        //return redirect()->route('courses.show',$id);
        return "create Successfully";
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $course=Course::find($id);
        return view('courses.update',compact('course'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $course=Course::find($id);
        $course->title=$request->input('title');
        $course->description=$request->input('description');
        $course->save();
        return redirect()->route('courses.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $course=Course::find($id);
        $course->delete();
        return redirect()->route('courses.index');
    }
}
