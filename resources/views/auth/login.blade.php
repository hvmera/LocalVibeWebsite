<!DOCTYPE html>
@extends('layouts.header')
@section('body')
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>

<style media="screen">
    .background {
      background-color: #FFFAF2;
    }
    </style>
    <hr>
<body class="background">
    <div >
        <br>
        <br>
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div style="padding:20px;">
                <label for="email">Email</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
                @error('email')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>

            <!-- Password -->
            <div  style="padding:20px;">
                <label for="password">Password</label>
                <input id="password" type="password" name="password" required autocomplete="current-password">
                @error('password')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>

            <!-- Remember Me -->
            <div  style="padding:20px;">
            
                <label for="register">Don't have an account with us? </label>
                <a href="/register">Register</a>
            </div>

            <div>
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" style="margin-left:20px;">Forgot your password?</a>
                @endif

                
            </div>
            <button type="submit">Log in</button>
        </form>
    </div>
<br>
<br>
<br>
    <!-- Include your JavaScript files here if needed -->
</body>

</html>



<hr>
@include ('layouts.footer')

</html>
@endsection