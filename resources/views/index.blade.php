@extends('layouts.default')

@section('content')

<section>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-8">
                <h1>CRUD</h1>
                <a href="{{url('create')}}" class="btn btn-primary">Create New</a>
            </div>
            <div class="col-lg-8 mt-5">
                <table class="table-bordered">
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Major</th>
                        <th>Action</th>
                    </tr>
                    @foreach($data as $studentData)
                        <tr>
                            <td>{{$studentData->id}}</td>
                            <td>{{$studentData->name}}</td>
                            <td>{{$studentData->major}}</td>
                            <td>
                                <a href="{{url('/show/'.$studentData->id)}}" class="btn btn-warning">Edit</a>
                                <a href="{{url('/destroy/'.$studentData->id)}}" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</section>

@endsection
