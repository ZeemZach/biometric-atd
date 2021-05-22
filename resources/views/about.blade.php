@extends('layouts.app')
@section('title')
    About Us    
@endsection
@section('content')
<div class="bg-light">
    <div class="container py-5">
      <div class="row h-100 align-items-center py-5">
        <div class="col-lg-6">
          <h1 class="display-4">About us</h1>
          <p class="lead text-muted mb-0">To Design an iot application to efficiently manage and keep accurate record of the daily attendance avoiding the manual mistakes.</p>
        </div>
        <div class="col-lg-6 d-none d-lg-block"><img
            src="{{ asset('img/about-bg.png') }}" alt="" class="img-fluid">
        </div>
      </div>
    </div>
  </div>
@endsection