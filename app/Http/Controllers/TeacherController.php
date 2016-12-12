<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\teacher;

class TeacherController extends Controller
{

    public function getTeacherSalary(){
        $name=teacher::all(['name','id']);

        return view('teacherSalary',[
            'names' => $name
        ]);
    }





}
