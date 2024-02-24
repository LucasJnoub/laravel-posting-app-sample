@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-8/12 bg-white p-6 rounded-lg">
            <h1 class="text-2xl font-bold mb-4">Welcome to Your Website</h1>
            <p class="text-lg mb-4">This is a simple example of a welcome page.</p>
            @if (auth()->user())
                <p class="text-lg">You are logged in as {{ auth()->user()->name }}.</p>
            @else
                <p class="text-lg">Please <a href="{{ route('login') }}" class="text-blue-500">login</a> or <a href="{{ route('register') }}" class="text-blue-500">register</a> to continue.</p>
            @endif
        </div>
    </div>
@endsection
