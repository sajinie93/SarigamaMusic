<header>

    <h4>Navigation</h4>
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="">Home</a></li>
        <li><a href="">My Home</a></li>
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">My Profile <span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li><a href="#">View profile</a></li>
                <li><a href="#">View progress</a></li>

            </ul>
        </li>
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">My Courses <span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li><a href="{{route('viewCourse1')}}">Course-1</a></li>
                <li><a href="{{route('viewCourse2')}}">Course-2</a></li>
                <li><a href="{{route('viewCourse3')}}">Course-3</a></li>
            </ul>
        </li>

    </ul><br>
    <div class="input-group">
        <input type="text" class="form-control" placeholder="Search..">
        <span class="input-group-btn">
      <button class="btn btn-default" type="button">
        <span class="glyphicon glyphicon-search"></span>
      </button>
    </span>
    </div>




</header>