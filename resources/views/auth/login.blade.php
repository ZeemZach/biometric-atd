@extends('layouts.app')
@section('title')
    Faculty Login    
@endsection
@section('content')
<div class="login-form mb-3">
    <form method="POST" action="{{ route('login') }}">
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
        <div class="avatar"><i class="material-icons">&#xE7FF;</i></div>
        <h4 class="modal-title">Login to Your Account</h4>
        <div class="form-group">
            <input type="text" class="form-control" name="email" placeholder="Email"
                required="required">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password"
                required="required">
        </div>

        <button class="btn btn-primary btn-block btn-lg" type="submit">Login</button>

    </form>
    <div class="container">
        <div class="row">
            <a class="col-12 p-0 mb-3" href="{{route('faculty_register')}}">
                <button class="btn btn-primary btn-block btn-lg">Register As Faculty</button>
            </a>
            <a class="col-12 p-0" href="{{route('student_register')}}">
                <button class="btn btn-primary btn-block btn-lg">Register As Student</button>
            </a>
        </div>
    </div>
    
</div>
@endsection