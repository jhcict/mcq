@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="page-header">
                <h1>Create Paper <small>Crafting the tiny portfolio of life</small></h1>
            </div>
            <form method="POST" action="{{route('paper.store')}}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                             <div class="form-group">
                                <label for="name">Name</label>
                                <input class="pull-right" type="text" id="name" placeholder="Enter Name" name="name"><br>
                            </div>
                             <div class="form-group">
                                <label for="description">Description</label>
                                <input class="pull-right" type="text" id="description" placeholder="Enter Description" name="description"><br>
                            </div>
                            <div class="form-group">
                                <label for="year">Year</label>
                                <input class="pull-right" type="year" id="year" placeholder="Enter Year" name="year"><br>
                            </div>
                            <div class="form-group">
                                <label for="subject_id">Subject</label>
                                <!-- # -->
                                <select class="pull-right" id="subject_id" name="subject_id">
                                    @foreach($subjects as $subject)
                                    <option value="{{$subject->id}}">{{$subject->name}}</option>
                                    @endforeach
                                </select>
                                <!-- /# -->
                            </div>
                            <!-- /.form-group -->
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
