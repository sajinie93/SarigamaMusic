<?php

namespace App\Http\Controllers;
use App\Course;


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

    public function getAllCourses(){
        $all_courses = Course::all();   // fetch data from database
        return view('addCourse',[
            'courses' => $all_courses
        ]);
    }

    public function store_course(Request $request){

        $title = $request['title'];
        $capacity = $request['capacity'];
        $location = $request['location'];
        $fee = $request['fee'];
        $instrument = $request['instrument'];

        $course = new Course();
        $course->title = $title;
        $course->capacity = $capacity;
        $course->location = $location;
        $course->fee = $fee;
        $course->instrument = $instrument;

        $course->save();

        return redirect()->route('all_courses_route');

    }
}
