@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="page-header">
        <h1><a href="{{route('index')}}">
            <span class="glyphicon glyphicon-menu-left"> </span></a>
          Papers <small>All Tiny Portfolios till date</small>
          @role(['admin','moderator'])
          <a href="{{route('paper.create')}}" class="btn btn-success btn-lg pull-right">Create</a>
          @endrole
        </h1>
      </div>
      <!-- .clearfix -->
      <div class="clearfix"></div>
      <!-- /.clearfix -->
      <table class="table">
        <thead>
          <tr>
            <td>#</td>
            <td>Name</td>
            <td>Subject</td>
            <td>Code</td>
            <td>Clarification</td>
            <td>Actions</td>
          </tr>
        </thead>
        <tbody>
          @foreach($papers as $paper)
          <tr>
            <td>{{$paper->id}}</td>
            <td>{{$paper->name}}</td>
            <td>{{$paper->subject->name}}</td>
            <td>{{$paper->subject->code}}</td>
            <td>{{($paper->status)?"Official":"Unofficial"}}</td>
            <td>
              <a href="{{route('paper.show',$paper->id)}}" class="btn btn-info">View</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection
