<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title')</title>

        {{-- style --}}
        <link href="{{ asset('vendors/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    </head>
    <body>
        @guest
            @include('menu.guest')            
        @endguest
        @auth
            @include('menu.auth')
        @endauth
        @yield('content')
        @include('footer.index')
        {{-- script --}}
        <script src="{{ asset('vendors/bootstrap/jquery-3.6.0.min.js') }}"></script>
        <script src="{{ asset('vendors/bootstrap/popper.min.js') }}"></script>
        <script src="{{ asset('vendors/bootstrap/js/bootstrap.min.js') }}"></script>
    </body>
</html>