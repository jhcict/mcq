@extends('admin.layouts.dashboard')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="{{route('admin.category.create')}}" class="btn btn-success pull-right">Create</a>
                <table class="table">
                    <thead>
                        <tr>
                            <td>#</td>
                            <td>Category</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($categories as $category)
                            <tr>
                                <td>{{$category->id}}</td>
                                <td>{{$category->name}}</td>
                                <td>
                                    <!-- .btn -->
                                    <a class="btn btn-warning" href="{{route('admin.category.edit',$category->id)}}">Edit</a>
                                    <!-- /.btn -->

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

