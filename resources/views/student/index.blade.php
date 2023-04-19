@extends('student.layout')

@section('content')

<div class="pull-left">
    <h2>Students Information</h2>
</div>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('student.create') }}">Create New Student</a>
        </div>
    </div>
</div>

@if($message=Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif
<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Id</th>
        <th>Name</th>
        <th>Father Name</th>
        <th>Mother Name</th>
        <th>Location</th>
        <th width="280px">Action</th>
    </tr>

    @foreach($student as $stud)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $stud->id }}</td>
        <td>{{ $stud->name }}</td>
        <td>{{ $stud->father_name }}</td>
        <td>{{ $stud->mother_name }}</td>
        <td>{{ $stud->location }}</td>
        <td>
            <form action="{{ route('student.destroy',$stud->id) }}" method="POST">
                 <a class="btn btn-info" href="{{ route('student.show',$stud->id) }}">Show</a>
                 <a class="btn btn-primary" href="{{ route('student.edit',$stud->id) }}">Edit</a>
                 @csrf
                 @method('DELETE')

                 <button type="submit" class="btn btn-danger">Delete</button>
            </form>

        </td>
    </tr>
    @endforeach

</table>

@endsection