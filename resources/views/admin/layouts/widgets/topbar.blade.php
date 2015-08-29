<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{action('HomeController@getIndex')}}">Edlara v2</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="{{action('Admin\HomeController@getIndex')}}">Dashboard</a></li>
                <li><a href="{{action('Admin\TutorialController@index')}}">Tutorials</a></li>
                <li><a href="{{action('Admin\AssessmentController@index')}}">Assessments</a></li>
                <li><a href="{{action('Admin\PresentationController@index')}}">Presentations</a></li>
                <li><a href="{{action('Admin\ExamController@index')}}">Exams</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">

                <li><a href="{{action('HomeController@getIndex')}}">View Site</a></li>
                @if (Auth::guest())
                    <li><a href="/auth/login">Login</a></li>
                    <li><a href="/auth/register">Register</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->first_name }} {{Auth::user()->last_name}} <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="/auth/logout">Logout</a></li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>