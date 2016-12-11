<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;

class StudentAttendance extends Controller
{

    public function getAllStudentAttendance(){
        return view('studentAttendanceHistory');
    }

    public function markStudentAttendance(){
        $all_courses = Course::all();                          // change this Course to Student
        return view('markStudentAttendance',[
            'courses' => $all_courses                          // courses=>students
        ]);
//        return view('markStudentAttendance');
    }

}
