@extends('students.layout')

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2 class="alert alert-warning text-center">Add New Student</h2>
        </div>
        <div class="pull-right my-3">
            <a class="btn btn-success" href="{{ route('students.index') }}">Back</a>
        </div>
    </div>
</div>

@if($errors->any())

    <div class="alert alert-danger my-3">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>

        <ul>
            @foreach($errors->all() as $error)

                <li>{{ $error }}</li>

            @endforeach
        </ul>
    </div>

@endif

<form action="{{ route('students.store') }}" method="POST">
@csrf

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>StudentName</strong>
            <input type="text" name="studname" class="form-control" placeholder="Studname">
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Course</strong>
            <input type="text" name="course" class="form-control" placeholder="Course">
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Fee</strong>
            <input type="text" name="fee" class="form-control" placeholder="Fee">
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>

</form>
@endsection
