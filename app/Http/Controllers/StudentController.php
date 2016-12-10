<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

//use App\Http\Requests;

class StudentController extends Controller
{

    public function getAllStudents(){
        $all_students = Student::all();
        $name = 'Sajinie';
        return view('students', [
            'name' => $name,
            'students' => $all_students
        ]);
    }

    public function add_student(Request $request){

        $this->validate($request,[
            'student_name' => 'required|max:10',
            'age' => 'numeric'
        ]);

        $passed_name = $request['student_name'];
        $passed_age = $request['age'];

        $student = new Student;
        $student->name = $passed_name;
        $student->age = $passed_age;

        $student->save();

        return redirect()->route('all_students_route');
    }

    public function view_student_my_home(){
        return view('studentMyHome');
    }
    public function view_course1(){
        return view('course1');
    }
    public function view_course2(){
        return view('course2');
    }
    public function view_course3(){
        return view('course3');
    }
    public function getStudentProfile(){
        return view('studentProfile');                // dummy implementation
    }
    public function getStudentProgress(){
        return view('studentProgress');               // dummy implementation
    }




}
