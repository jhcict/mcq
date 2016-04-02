@extends('admin.layouts.dashboard')

@section('content')
<h4>Edit User</h4>
<div class="container">
  <div class="row">
    <div class="col-md-7 col-md-offset-1">

      {{Form::model($user,['action' =>['Admin\UserController@update',$user->id],'method'=>'put'])}}

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
        {{Form::label('group', 'Group', array('class' => 'label','style'=>'color:#000;'))}}
        {{Form::select('group',['admin'=>'Administrator','moderator'=>'Moderator','registered'=>'Registered'],null,['class'=>'pull-right','width'=>100])}}
      </div>
      <br>
      <br>
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
