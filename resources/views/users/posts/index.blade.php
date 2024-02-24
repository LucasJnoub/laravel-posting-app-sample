@extends('layouts.app')

@section('content')
    <div class="flex flex-col items-center gap-10">
        <div class="w-8/12 bg-white p-6 rounded-lg shadow-md text-center">
            <h1 class="text-2xl font-bold">{{ $user->name }}</h1>
        </div>
        <div class="w-8/12">
            <h2 class="text-xl font-bold mb-4">Posts</h2>
            @foreach ($user->posts as $post)
                <div class="bg-white p-6 rounded-lg shadow-md mb-4">
                    <p class="text-gray-500">{{ $post->created_at->diffForHumans() }}</p>
                    <p class="text-lg font-bold">{{ $post->body }}</p>
                </div>
            @endforeach
        </div>
    </div>
@endsection
