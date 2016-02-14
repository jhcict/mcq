@extends('admin.layouts.dashboard')

@section('content')
<h4>Create User</h4>
<div class="container">
  <div class="row">
    <div class="col-md-7 col-md-offset-1">

      {{Form::open(['action' =>'Admin\UserController@store'])}}

      <!-- .form-group -->
      <div class="form-group">
        {{Form::label('email', 'E-Mail Address', array('class' => 'label','style'=>'color:#000;'))}}
        {{Form::text('email',NULL,['class'=>'pull-right','size'=>50])}}
      </div>
      <!-- /.form-group -->
      <br>
      <!-- .form-group -->
      <div class="form-group">
        {{Form::label('name', 'Name', array('class' => 'label','style'=>'color:#000;'))}}
        {{Form::text('name',NULL,['class'=>'pull-right','size'=>50])}}
      </div>
      <!-- /.form-group -->
      <br>
      <!-- .form-group -->
      <div class="form-group">
        {{Form::label('password', 'Password', array('class' => 'label','style'=>'color:#000;'))}}
        {{Form::password('password',['class'=>'pull-right','size'=>50])}}
      </div>
      <!-- /.form-group -->
      <br>
      <!-- .form-group -->
      <div class="form-group">
        {{Form::label('group', 'Group', array('class' => 'label','style'=>'color:#000;'))}}
        {{Form::select('group',['admin'=>'Administrator','moderator'=>'Moderator','registered'=>'Registered'],'registered',['class'=>'pull-right','width'=>100])}}
      </div>

      <br>
      <br>
      {{Form::submit('Submit',['class'=>'btn btn-success'])}}
      &nbsp;
      {{link_to_action('Admin\UserController@index','Cancel',NULL,['class'=>'btn btn-warning'])}}
      <!-- /.form-group -->
      {{Form::close()}}
    </div>
  </div>
</div>
@endsection
