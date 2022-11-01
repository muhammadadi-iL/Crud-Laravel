@extends('students.layout')

@section('content')

<div class="pull-left">
    <h2 class="alert alert-info text-center">Student Crud</h2>
</div>

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-right mb-3">
            <a class="btn btn-warning" href="{{ route('students.create')}}">Create</a>
        </div>
    </div>
</div>

@if($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

<table class="table table-bordered">
    <tr class="text-center">
        <th>Sr/No:</th>
        <th>Name</th>
        <th>Course</th>
        <th>Fee</th>
        <th width ="160px">Action</th>
    </tr>
    @foreach($students as $student)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $student->studname }}</td>
        <td>{{ $student->course }}</td>
        <td>{{ $student->fee }}</td>
        <td>
            <form action="{{ route('students.destroy', $student->id) }}" method="POST">
                {{-- <a class="btn btn-info" href="{{ route('students.show', $student->id) }}">Show</a> --}}
                <a class="btn btn-primary" href="{{ route('students.edit', $student->id) }}">Edit</a>

                @csrf
                @method("DELETE")

                <button type="submit" class="btn btn-danger my-2">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
