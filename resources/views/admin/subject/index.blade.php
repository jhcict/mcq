@extends('admin.layouts.dashboard')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <a href="{{route('admin.subject.create')}}" class="btn btn-success pull-right">Create</a>
                    <thead>
                        <tr>
                            <td>#</td>
                            <td>Name</td>
                            <td>Category</td>
                            <td>Code</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($subjects as $subject)
                            <tr>
                                <td>{{$subject->id}}</td>
                                <td>{{$subject->name}}</td>
                                <td>{{$subject->category->name}}</td>
                                <td>{{$subject->code}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
