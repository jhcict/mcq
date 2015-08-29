<ul class="nav nav-sidebar">
    <li><a href="{{action('Admin\HomeController@getIndex')}}">Dashboard</a></li>
    <li><a href="{{action('Admin\TutorialController@index')}}">Tutorials</a></li>
    <li><a href="{{action('Admin\AssessmentController@index')}}">Assessments</a></li>
    <li><a href="{{action('Admin\ExamController@index')}}">Exams</a></li>
    <li><a href="{{action('Admin\PresentationController@index')}}">Presentations</a></li>
    <li class="nav-divider"></li>
    <li><a href="{{action('Admin\SubjectController@index')}}">Subjects</a></li>
    <li><a href="{{action('Admin\StudentController@index')}}">Students</a></li>
    <li><a href="{{action('Admin\TeacherController@index')}}">Teachers</a></li>
    <li><a href="{{action('Admin\UserController@index')}}">Users</a></li>
    <li><a href="{{action('Admin\SettingsController@getIndex')}}">Settings</a></li>
</ul>