@extends('layouts.app')
@section('title')
    Dashboard    
@endsection
@section('content')
<div class="text-center mb-3">welcome to attendace portal...{{auth()->user()->name}}</div>

<div class='container'>
    <div class='table-responsive'>
        <table class="table table-striped table-bordered table-hover">
            <tr>
                <th>Name</th>
                <th>Roll No</th>
                <th>Fingure Id</th>
                <th>Course</th>
                <th>Phone No</th>
                <th>Email</th>
            </tr>     
            <tr>
                <td>{{$student->name}}</td>
                <td>{{$student->details['roll_no']}}</td>
                <td>{{$student->details['finger_id']}}</td>
                <td>{{$student->course['name']}}</td>
                <td>{{$student->phone}}</td>
                <td>{{$student->email}}</td>
            </tr>
        </table>
    </div>
</div>
<div class="container">
    <div class="table-responsive">';
        @foreach ($dateWiseAttendances as $key => $attendances)
            <table class="table table-striped table-bordered table-hover">
                <tr>
                    <th width="33.33%">Name</th>
                    <th width="33.33%">Roll No</th>
                    <th width="33.33%">Date {{$key}}</th>
                </tr>
                @foreach ($attendances as $attendance)
                <tr>
                    <td>{{$attendance->userDetail ? $attendance->userDetail['user']->name : null}}</td>
                    <td>{{$attendance->userDetail['roll_no']}}</td>
                    <td>{{$attendance->created_at}}</td>
                </tr>            
                @endforeach
            </table>             
        @endforeach 
    </div>
</div>
@endsection