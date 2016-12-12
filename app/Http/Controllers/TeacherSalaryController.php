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

    public function getDetail(){
        $details=teacher::all();
        return view('teacherDetail',['details'=>$details]);
    }
    public function SalaryUpdate(Request $request){
        $payment=$request['payment'];
        //update teacher payment
        return view('teacherDetail');
    }
}
?>