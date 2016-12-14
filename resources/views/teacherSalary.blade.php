@extends('layouts.adminLayout')
@section('title')
    Teacher Salary
@endsection
@section('content')

    <h4 style="padding: 0.3cm;">
        <button class="btn btn-default" type="button" style="float: right; ">
            <a href="#"><span class="glyphicon glyphicon-user"></span> Logout</a>
        </button>
    </h4>
    <hr>


    <div>
        <h1> Teacher Salary </h1>
    </div>



    <div class="col-sm-12;" style="padding-bottom: 10%; margin-top: 2% ">
        <div class="container"
             style="border-style: inset; padding-bottom: 5%; width: 100%; float: left; background-color: white;">
            <h2>Select teacher's name</h2>

            <form action="{{route('teacher_detail')}}" method="post">

                <div class="form-group">
                    {!! Form::Label('name', 'Name:') !!}
                    <select class="form-control" name="name_id">
                        @foreach($names as $name)
                            <option value="{{$name->name_id}}">{{$name->name}}</option>
                        @endforeach
                    </select>

                </div>

                <button class="btn btn-default" type="submit">
                    Select
                </button>
                <input type="hidden" name="_token" value="{{Session::token()}}">
            </form>


            <div class="row" style="padding-top: 2%;">
                <div class="col-md-12">

                </div>
            </div>

        </div>

    </div>


@endsection

