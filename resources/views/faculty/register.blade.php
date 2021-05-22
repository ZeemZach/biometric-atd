@extends('layouts.app')
@section('title')
    Faculty Registration    
@endsection
@section('content')
<div class="card bg-light">
    <article class="card-body mx-auto" style="max-width: 400px;">
        <h4 class="card-title mt-3 text-center">Create Faculty Account</h4><br>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                </div>
                <input id="Text1" type="text" name="name" class="form-control" placeholder="Full name"
                maxlength="30" required>
            </div>
            <input type="hidden" name="role" value="faculty" />
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-book"></i> </span>
                </div>                
                <select class="form-control form-select" name="course_id" required>
                    <option value="" selected>Select Course</option>
                    @foreach($courses as $course)
                        <option value="{{$course->id}}">{{$course->name}}</option>
                    @endforeach
                </select>
            </div>
            <!-- form-group// -->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
                </div>
                <input id="Text4" type="text" name="phone" class="form-control" placeholder="Phone number"
                maxlength="10" required>
            </div> <!-- form-group// -->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                </div>
                <input id="Text5" type="text" name="email" class="form-control" placeholder="Email address"
                maxlength="30" required>
            </div> <!-- form-group// -->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                </div>
                <input id="Text7" type="password" name="password" class="form-control" placeholder="Password"
                maxlength="8" required>
            </div> <!-- form-group// -->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                </div>
                <input id="Text7" type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password"
                maxlength="8" required>
            </div> <!-- form-group// -->
            <div class="form-group">
                <button id="Submit1" type="submit" value="REGISTER" class="btn btn-primary btn-block"> Create
                    Account </button>
            </div> <!-- form-group// -->
            <p class="text-center">Have an account? <a href="{{route('login')}}">Log In</a> </p>
        </form>
    </article>
</div>
@endsection