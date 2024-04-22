<!DOCTYPE html>
@extends('layouts.header')
@section('body')
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>

<style media="screen">
    .background {
      background-color: #FFFAF2;
    }
    </style>
    <hr>
<body class="background">
    
    <div class="register-form">
        <form method="POST" action="{{ route('register') }}" class="form">
            @csrf

            <!-- Name -->
            <div class="form-group" style="padding:10px;">
                <x-input-label for="name" :value="__('Name')" />
                <x-text-input id="name" class="form-control" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="error-message" />
            </div>

            <!-- Email Address -->
            <div class="form-group" style="padding:10px;">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="error-message" />
            </div>

            <!-- Password -->
            <div class="form-group" style="padding:10px;">
                <x-input-label for="password" :value="__('Password')" />
                <x-text-input id="password" class="form-control" type="password" name="password" required autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password')" class="error-message" />
            </div>

            <!-- Confirm Password -->
            <div class="form-group" style="padding:10px;">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                <x-text-input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password_confirmation')" class="error-message" />
            </div>

            <div class="form-group" style="padding:10px;">
                <div class="flex items-center justify-end mt-4">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>

                    <x-primary-button class="ms-4">
                        {{ __('Register') }}
                    </x-primary-button>
                </div>
            </div>
        </form>
    </div>

</body>

</html>



<hr>
@include ('layouts.footer')

</html>
@endsection
