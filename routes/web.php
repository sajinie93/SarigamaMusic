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
Route::get('/students', 'StudentController@getAllStudents')->name('all_students_route');

Route::post('/add_student', 'StudentController@add_student')->name('add_student_route');

Route::get('/getSubject','SubjectController@get_page')->name('get_subject');

Route::post('/add_subject', 'SubjectController@store_subject')->name('add_subject');

Route::get('/viewStudent', 'StudentController@view_student_my_home')->name('viewStudentMyHome');

Route::get('/viewCourse1', 'StudentController@view_course1')->name('viewCourse1');

Route::get('/viewCourse2', 'StudentController@view_course2')->name('viewCourse2');

Route::get('/viewCourse3', 'StudentController@view_course3')->name('viewCourse3');



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
//    Route::get('/teacherHome', function () {
//        return view('layouts.teacherHome');
//    });

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

    Route::get('/student', 'StudentController@getStudentHomePage')->name('get_student_home_page');

    Route::get('/student/my', 'StudentController@getMyHomePage')->name('get_my_home_page');


    Route::get('/user/profile', [                                        // correct version /user{id}/profile
        'uses' => 'StudentController@getStudentProfile',
        'as' => 'viewProfile'
    ]);

    Route::get('/user/progress', [
        'uses' => 'StudentController@getStudentProgress',
        'as' => 'viewProgress'
    ]);
});




