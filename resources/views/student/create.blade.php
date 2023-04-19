@extends('student.layout')

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Student</h2>
        </div>

        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('student.index') }}">Back</a>
        </div>
    </div>
</div>

@if($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong>There were some problems with your input.<br><br>

    <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('student.store') }}" method="POST">
   @csrf

   <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Id:</strong>
            <input type="number" name="id" class="form-control" placeholder="Student Id"
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            <input type="text" name="name" class="form-control" placeholder="Student Name"
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Father Name:</strong>
            <input type="text" name="father_name" class="form-control" placeholder="Father Name"
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Mother Name:</strong>
            <input type="text" name="mother_name" class="form-control" placeholder="Mother Name"
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Location:</strong>
            <textarea name="location" class="form-control" placeholder="">Address</textarea>
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12 text-left">
            <button type="submit" class="btn btn-primary">Submit</button>
    </div>

   </div>
</form>
@endsection