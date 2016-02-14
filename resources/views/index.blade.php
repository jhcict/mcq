@extends('layouts.app')

@section('content')
<!-- .container -->
<div class="container">
  <!-- .row -->
  <div class="row">
    <!-- .col-md-2 -->
    <div class="col-md-2">
      <!-- .panel -->
      <div class="panel panel-success">
        <!-- .panel-heading -->
        <div class="panel-heading">Useful Links</div>
        <!-- /.panel-heading -->
        <!-- .panel-body -->
        <div class="panel-body">
          <!-- .list-group -->
          <div class="list-group">
            <!-- .list-group-item   -->
            <a class="list-group-item  " href="{{route('paper.index')}}">Papers</a>
            <!-- /.list-group-item   -->
            <!-- .list-group-item   -->
            <a class="list-group-item  " href="{{route('discussion.index')}}">Discussions</a>
            <!-- /.list-group-item   -->
            <!-- .list-group-item   -->
            <a class="list-group-item  " href="#account">Account Settings</a>
            <!-- /.list-group-item   -->
          </div>
          <!-- /.list-group -->
        </div>
        <!-- /.panel-body -->
      </div>
      <!-- /.panel -->
    </div>
    <!-- /.col-md-2 -->
    <!-- .col-md-8 -->
    <div class="col-md-8">STREAM OF UPDATE FLOW</div>
    <!-- /.col-md-8 -->
    <!-- .col-md-2 -->
    <div class="col-md-2">INSTAUPDATES</div>
    <!-- /.col-md-2 -->
  </div>
  <!-- /.row -->
</div>
<!-- /.container -->
@endsection
