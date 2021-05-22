@extends('layouts.app')
@section('title')
    Home    
@endsection
@section('content')
<section class="banner">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h2>KC COLLEGE OF ENGINEERING</h2>
                <p>Welcome To Our Attendance Portal</p>
                <a href="{{ route('about') }}" class="btnD1">Read More</a>
            </div>
        </div>
    </div>
</section>
@endsection