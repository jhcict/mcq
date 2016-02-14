@extends('admin.layouts.dashboard')



@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form method="POST" action="{{action('Admin\CategoryController@store')}}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" id="name" placeholder="Enter Name" name="name"><br>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-default">Create</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
