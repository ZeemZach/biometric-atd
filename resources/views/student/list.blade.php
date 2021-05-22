@extends('layouts.app')
@section('title')
    List of Student    
@endsection
@section('content')
<div class="container">
    <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover">
            <tr>
                <th>Name</th>
                <th>Roll No</th>
                <th>Fingure Id</th>
                <th>Course</th>
                <th>Phone No</th>
                <th>Email</th>
            </tr>
            @foreach ($students as $student)        
            <tr>
                <td>{{$student->name}}</td>
                <td>{{$student->details['roll_no']}}</td>
                <td>{{$student->details['finger_id']}}</td>
                <td>{{$student->course['name']}}</td>
                <td>{{$student->phone}}</td>
                <td>{{$student->email}}</td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection