@extends('admin.layouts.dashboard')



@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form method="POST" action="{{action('Admin\SubjectController@store')}}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" id="name" placeholder="Enter Name" name="name"><br>
                                </div>
                                <div class="form-group">
                                    <label for="code">Code</label>
                                    <input type="text" id="code" placeholder="Code" name="code"><br>
                                </div>
                                 <div class="form-group">
                                    <label for="abbreviation">Abbreviation</label>
                                    <input type="text" id="abbr" placeholder="Abbreviation" name="abbreviation"><br>
                                </div>
                                <!-- .form-group -->
                                <div class="form-group">
                                    <label for="category_id">Category</label>
                                    <!-- # -->
                                    <select id="category_id" name="category_id">
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                    <!-- /# -->
                                </div>
                                <!-- /.form-group -->
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-default">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

