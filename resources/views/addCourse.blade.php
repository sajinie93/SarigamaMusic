@extends('layouts.adminLayout')

@section('style')
    <style>
        .form-control {
            /*padding-right: 150px;*/
            width: 80%;

        }



        .container {

            width: 80%;

        }

    </style>


@endsection

@section('content')

    <h4 style="padding: 0.3cm;"><button class="btn btn-default" type="button" style="float: right; ">
            <a href="#"><span class="glyphicon glyphicon-user"></span> Logout</a>
        </button></h4>
    <hr>


    <div>
        <h1>Course</h1>
    </div>

    <div class="col-sm-12" style="padding-bottom: 10%;">
        <div class="container" style="float: left;  border-style: inset; padding-bottom: 5%; background-color: white;">


                <h2>Add Course</h2>
                <form action="{{route('store_course')}}" method="POST">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="title">Course Title:</label>
                        <input type="text" class="form-control" name='title' id="title" placeholder="Enter course title">
                    </div>
                    <div class="form-group">
                        <label for="instrument">Instrument:</label>
                        <input type="text" class="form-control" name='instrument' id="instrument" placeholder="Enter instrument">
                    </div>
                    <div class="form-group">
                        <label for="fee">Course Fee:</label>
                        <input type="text" class="form-control" name="fee" id="fee" placeholder="Enter course fee">
                    </div>
                    <div class="form-group">
                        <label for="location">Location:</label>
                        <input type="text" class="form-control" name="location" id="location" placeholder="Enter location">
                    </div>
                    <div class="form-group">
                        <label for="capacity">Student Limit:</label>
                        <input type="text" class="form-control" name="capacity" id="capacity" placeholder="Enter student limit">
                    </div>
                    {{--<div class="checkbox">--}}
                        {{--<label><input type="checkbox"> Remember me</label>--}}
                    {{--</div>--}}
                    <button type="submit" class="btn btn-default" style="float:left;  color: #d9edf7; background-color: #2a88bd" value="submit">Save</button>
                </form>


        </div>
    </div>



    <div class="col-sm-12;" style="padding-bottom: 10%; margin-top: 60% ">
        <div class="container" style="border-style: inset; padding-bottom: 5%; width: 100%; float: left; background-color: white;">
            <h2>All Courses</h2>

            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search Blog..">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="button">
                        <span class="glyphicon glyphicon-search"></span>
                    </button>
                </span>
            </div>


            {{--<table class="table table-bordered" style="margin-top: 2%;">--}}

            <div class="row" style="padding-top: 2%;">
                <div class="col-md-12">
                    <table class="table table-bordered" style="border: groove;">
                        <tr>
                            <th>Title</th>
                            <th>Location</th>
                            <th>Capacity</th>
                            <th>Fee</th>
                            <th>Instrument
                            </th>
                        </tr>

                        @foreach($courses as $course)
                            <tr>
                                <th>{{ $course->title }}</th>
                                <th>{{ $course->location }}</th>
                                <th>{{ $course->capacity }}</th>
                                <th>{{ $course->fee }}</th>
                                <th>{{ $course->instrument }}</th>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
            {{--</table>--}}
        </div>

    </div>


@endsection