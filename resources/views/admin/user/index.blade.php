@extends('admin.layouts.dashboard')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <a href="/admin/user/create" class="btn btn-lg btn-success pull-right">Create</a>
      <table class="table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach($users as $user)
          <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>
              <a class='btn btn-info btn-sm' href="{{action('Admin\UserController@show',$user->id)}}">
                Info
              </a>
              <a class='btn btn-warning btn-sm' href="{{action('Admin\UserController@edit',$user->id)}}">
                Edit
              </a>
              <a class='btn btn-danger btn-sm' href="{{action('Admin\UserController@getBan',$user->id)}}">
                Ban
              </a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection
