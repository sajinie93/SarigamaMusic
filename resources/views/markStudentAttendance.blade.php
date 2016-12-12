@extends('layouts.adminLayout')


@section('content')

    <h4 style="padding: 0.3cm;"><button class="btn btn-default" type="button" style="float: right; ">
            <a href="#"><span class="glyphicon glyphicon-user"></span> Logout</a>
        </button></h4>
    <hr>


    <div>
        <h1> Attendance </h1>
    </div>



    <div class="col-sm-12;" style="padding-bottom: 10%; margin-top: 2% ">
        <div class="container" style="border-style: inset; padding-bottom: 5%; width: 100%; float: left; background-color: white;">
            <h2>Mark Student Attendance </h2>

            {{--<div class="input-group">--}}
                {{--<form action="{{route('filter_course_table')}}" method="post"  type="text" class="form-control" placeholder="Search by title | instrument | location .." name="searchValue">--}}
                {{--<span class="input-group-btn">--}}
                    {{--<button  type="submit" class="btn btn-default" name="search"  >--}}
                        {{--<a href="{{URL::route('/check')}}"></a>--}}
                        {{--<span class="glyphicon glyphicon-search"></span>--}}
                    {{--</button>--}}
                {{--</span>--}}
                {{--</form>--}}
            {{--</div>--}}


            <div class="row" style="padding-top: 2%;">
                <div class="col-md-12">
                    <table class="table table-bordered" style="border: groove;">
                        <tr>
                            <th>Index Number</th>
                            <th>Name</th>
                            <th>Present</th>
                            <th>Absent</th>
                            <th>Late</th>

                        </tr>

                        @foreach($courses as $course)
                        <tr>
                        <th>{{ $course->title }}</th>
                        <th>{{ $course->fee }}</th>
                        <th>

                            <div class="radio">
                                <label><input type="radio" name="{{$course->fee}}" id='express' ></label>
                            </div>
                        </th>
                        <th>

                            <div class="radio">
                                <label><input type="radio" name="{{$course->fee}}" id='express' ></label>
                            </div>
                        </th>
                        <th>

                            <div class="radio">
                                <label><input type="radio" name="{{$course->fee}}" id='express' ></label>
                            </div>
                        </th>
                        </tr>
                        @endforeach



                    </table>
                </div>
            </div>

        </div>

    </div>


@endsection