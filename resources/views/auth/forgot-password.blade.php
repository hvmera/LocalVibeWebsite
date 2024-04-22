<!DOCTYPE html>
@extends('layouts.header')
@section('body')
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <style>
        body {
            background-color: #FFFAF2;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .container3 {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .text-sm {
            font-size: 0.875rem;
        }
        .text-gray-600 {
            color: #4B5563;
        }
        .mb-4 {
            margin-bottom: 1rem;
        }
        .mt-4 {
            margin-top: 1rem;
        }
        .text-sm {
            font-size: 0.875rem;
        }
        .text-gray-600 {
            color: #4B5563;
        }
        .block {
            display: block;
        }
        .mt-1 {
            margin-top: 0.25rem;
        }
        .w-full {
            width: 100%;
        }
        .input-field {
            margin-bottom: 1rem;
        }
        .flex {
            display: flex;
        }
        .justify-end {
            justify-content: flex-end;
        }
        .items-center {
            align-items: center;
        }
        .primary-button {
            background-color: #4F46E5;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
            font-size: 1rem;
            transition: background-color 0.3s ease;
        }
        .primary-button:hover {
            background-color: #4338CA;
        }
    </style>
</head>
<body>
    <br>
    <br>
<div class="container3">
    <div class="mb-4 text-sm text-gray-600">
        Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.
    </div>

    <!-- Session Status -->
    <div class="mb-4 text-sm text-green-600">
        {{ session('status') }}
    </div>

    <form method="POST" action="{{ route('password.email') }}" class="input-field">
        @csrf

        <!-- Email Address -->
        <div class="input-field">
            <label for="email" class="block text-sm">Email</label>
            <input id="email" type="email" name="email" class="block mt-1 w-full" value="{{ old('email') }}" required autofocus />
            @error('email')
                <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>

        <div class="flex items-center justify-end mt-4">
            <button type="submit" class="primary-button">Email Password Reset Link</button>
        </div>
    </form>
</div>
<br>
        <br><br>
        <br>
</body>


<hr>
@include ('layouts.footer')

</html>
@endsection
