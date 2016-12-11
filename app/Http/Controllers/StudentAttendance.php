<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentAttendance extends Controller
{

    public function getAllStudentAttendance(){
        return view('studentAttendanceHistory');
    }

}
