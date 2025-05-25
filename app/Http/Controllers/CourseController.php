<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    public function show($id)
    {
        $course = Course::find($id);

        return view('Course.show', compact('course'));
    }

     //Destroy
     public function destroy (Course $course){

        $course->delete();

        return redirect()->route('Course.index');
    }

      public function edit(course $course){

        return view('Course.edit',compact('course'));

      }

     //Update
    public function update(Request $request, course $course){

        $course->name = $request->name;
        $course->save();

        return redirect()->route('course.index');

      }

}
