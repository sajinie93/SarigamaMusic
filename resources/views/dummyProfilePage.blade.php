@extends('layouts.studentHome')

@section('title')
    <style>
        img {
            border-radius: 8px;
        }
    </style>
@endsection

@section('middle_content')
    <div class="row">
        <div class="col-sm-12 text-center" style="background-color:lightgoldenrodyellow; border-bottom: 1px solid black; padding-top: 20px; padding-bottom: 20px;">Student Name</div>
    </div>
    <div class='row'>
        <div class="col-sm-2 image-center" style="background-color:lavender;">
            <img src="http://www.w3schools.com/images/w3schools_green.jpg" alt="W3Schools.com" width="100" height="100">

        </div>
        <div class="col-sm-10 text-center" style="background-color:lavenderblush;">description</div>
    </div>





@endsection