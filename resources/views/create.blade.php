@extends('layouts.default')

@section('content')

    <section>
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-8">
                    <form action="{{url('/store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mt-2">
                            <a href="{{url('/')}}">
                                << Back
                            </a>
                        </div>
                        <h1>Create New Student</h1>
                        <div class="form-group">
                            <label for="name">Student Name</label>
                            <input type="text" name="name" class="form-control" placeholder="John Doe">
                        </div>
                        <div class="form-group">
                            <label for="major">Major</label>
                            <input type="text" name="major" class="form-control" placeholder="Rocket Science">
                        </div>
                        <div class="form-group mt-2">
                            <button type="submit" class="btn btn-primary">
                                Create Student
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection
