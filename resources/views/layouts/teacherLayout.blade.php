@extends('layouts.master')

@section('side-bar')
    <h4>SaRigaMa MusIc</h4>
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="#section1">Dashboard</a></li>
        <li><a href="#section3">Profile</a></li>
        <li><a href="#section2">Course</a></li>
        <li><a href="#section3">Assignments</a></li>
        <li><a href="#section3">All Students</a></li>
        <li><a href="#section3">Attendance</a></li>
        <li><a href="#section3">Course Routing</a></li>
        <li><a href="#section3">Class Routing</a></li>
        <li><a href="#section3">Assignment Summary</a></li>


    </ul><br>
    <div class="input-group">
        <input type="text" class="form-control" placeholder="Search Blog..">
        <span class="input-group-btn">
            <button class="btn btn-default" type="button">
                <span class="glyphicon glyphicon-search"></span>
            </button>
        </span>
    </div>
@endsection