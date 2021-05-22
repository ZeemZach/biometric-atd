@extends('layouts.app')
@section('title')
    Every Day Attendance   
@endsection
@section('content')
<div class="container">
    <div class="table-responsive">
        @foreach ($dateWiseAttendances as $key => $attendances)
            <table class="table table-striped table-bordered table-hover">
                <tr>
                    <th width="33.33%">Name</th>
                    <th width="33.33%">Roll No</th>
                    <th width="33.33%">DATE {{$key}}</th>
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