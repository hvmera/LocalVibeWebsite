
@extends('layouts.header')
@section('body')
<html>
<style media="screen">
    .background {
      background-color: #FFFAF2;
    }
    </style>
    <hr>
    <body>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    
</x-app-layout>

</body>
@include ('layouts.footer')

</html>
@endsection