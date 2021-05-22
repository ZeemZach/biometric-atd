@extends('layouts.app')
@section('title')
    Todays Attendance   
@endsection
@section('content')
<div class="container">
    <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover">
            <tr>
                <th>Name</th>
                <th>Roll No</th>
                <th>DATE</th>
            </tr>
            @foreach ($attendances as $attendance)
            <tr>
                <td>{{$attendance->userDetail ? $attendance->userDetail['user']->name : null}}</td>
                <td>{{$attendance->userDetail['roll_no']}}</td>
                <td>{{$attendance->created_at}}</td>
            </tr>            
            @endforeach
        </table>   
    </div>
</div>
@endsection