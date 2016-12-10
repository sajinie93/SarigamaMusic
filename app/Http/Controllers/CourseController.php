<?php

namespace App\Http\Controllers;
use App\Course;
use App\Subject;

use Illuminate\Http\Request;

use App\Http\Requests;

class CourseController extends Controller
{
    public function get_page(){
        $data = Course::all();


        return view('subject',[
            'title' => $data
        ]);

    }

    public function store_course(Request $request){

        $title = $request['title'];
        $capacity = $request['capacity'];
        $location = $request['location'];
        $fee = $request['fee'];
        $instrument = $request['instrument'];
//        $marks = $request['marks'];

        $course = new Course();
        $course->title = $title;
        $course->capacity = $capacity;
        $course->location = $location;
        $course->fee = $fee;
        $course->instrument = $instrument;

        $course->save();

//        return redirect()->route('/dummyAddCourse');
        return view('addCourse');



    }
}
