<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


// GET POST PUT DELETE


Route::get('/register', function () {
    return view('registration');
});

Route::get('/check', function () {
    return view('layouts.master');
});


Route::post('/filterCourse', 'CourseController@filterCourse')->name('filter_course_table');

Route::get('/class', 'CourseController@getAllCourses')->name('all_classes');

Route::get('/students', 'StudentController@getAllStudents')->name('all_students_route');

Route::get('/addCourse', 'CourseController@getAllCourses')->name('all_courses_route');

Route::post('/add_student', 'StudentController@add_student')->name('add_student_route');

Route::get('/getSubject','SubjectController@get_page')->name('get_subject');

Route::post('/storeCourse', 'CourseController@store_course')->name('store_course');

Route::post('/addSubject', 'CourseController@store_course')->name('add_subject');

Route::get('/markStudentAttendance', 'StudentAttendance@markStudentAttendance')->name('mark_student_attendance');

Route::get('/studentAttendanceHistory', 'StudentAttendance@getAllStudentAttendance')->name('view_student_attendance_history');

Route::get('/teacherSalary', 'TeacherSalaryController@getName')->name('teacher_salary');


Route::group(['middleware' => ['web']], function (){

    Route::get('/', function () {
        return view('layouts.master');
    });
    Route::get('/admin', function () {
        return view('layouts.adminLayout');
    });
    Route::get('/teacher', function () {
        return view('layouts.teacherLayout');
    });

    Route::get('/dashboard', [
        'uses' => 'UserController@getDashboard',
        'as' => 'dashboard'
    ]);


});

// rotues for student's stuff

Route::group(['middleware' => ['auth','web']], function (){
    Route::post('/signup',[
        'uses' => 'UserController@postSignUp',
        'as' => 'signup'
    ]);

    Route::post('/signin',[
        'uses' => 'UserController@postSignIn',
        'as' => 'signin'
    ]);

//    Route::get('/student', 'StudentController@getStudentHomePage')->name('get_student_home_page');
//
//    Route::get('/student/my', 'StudentController@getMyHomePage')->name('get_my_home_page');


//    Route::get('/user/profile', [                                        // correct version /user{id}/profile
//        'uses' => 'StudentController@getStudentProfile',
//        'as' => 'viewProfile'
//    ]);
//
//    Route::get('/user/progress', [
//        'uses' => 'StudentController@getStudentProgress',
//        'as' => 'viewProgress'
//    ]);
});




