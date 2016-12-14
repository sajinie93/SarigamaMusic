<?php
namespace App\Http\Controllers;

use App\Teacher;
use Illuminate\Http\Request;

use App\Http\Requests;

class TeacherSalaryController extends Controller{
    public  function getName(){
        $name=teacher::all(['name']);
        return view('teacherSalary',['names'=> $name]);
    }
}
?>