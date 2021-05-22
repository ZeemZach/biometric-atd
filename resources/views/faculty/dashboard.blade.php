@extends('layouts.app')
@section('title')
    Dashboard    
@endsection
@section('content')
<div class="jumbotron">
    <h1 style="color:white;">{{auth()->user()->name}},Welcome to College Attendance Portal!</h1>
    <p>
        <a href="#" class="btn btn-light" role="button">Learn more</a>
    </p>
</div>
<div class="container mb-3">
    <a class="btn btn-outline-dark" href="{{route('student_details')}}">Details of student</a>
</div>
<div class="container mb-3">
    <a class="btn btn-outline-dark" href="{{route('todays_attendance')}}">Todays attendance</a>
</div>
<div class="container  mb-3">
    <a class="btn btn-outline-dark" href="{{route('everyday_attendance')}}">Everyday attendance</a>
</div>
<div class="mb-3"></div>
@endsection