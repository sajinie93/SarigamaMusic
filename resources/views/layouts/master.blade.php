<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    @yield('home_style')
</head>
<body>
@include('include.signature')
    <div class="container">
        @yield('header_section')
    </div>
    @include('include.header2 ')
    <div class="container">
        @yield('content')
    </div>
    <div class="container-fluid text-center">
        <div class="row content">
            @yield('body_content')
        </div>
    </div>





</body>
</html>