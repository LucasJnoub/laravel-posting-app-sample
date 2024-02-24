@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-8/12 bg-white p-6 rounded-lg">
            <form action="{{route('posts')}}" method="post">
                @csrf
                <div class="mb-4">
                    <label for="body" class="sr-only">Body</label>
                    <textarea name="body" id="body" cols="30" rows="4" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('body') border-red-500 @enderror" placeholder="Oq você está pensando?"></textarea>

                    @error('body')
                        <div class="text-red-500 mt-2 text-sm">
                            {{$message}}
                        </div>
                    @enderror

                    <div>
                        <button class="bg-blue-500 text-white px-4 py-2 rounded font-medium">
                            Postar
                        </button>
                    </div>
                </div>
            </form>
            
            @if (isset($posts) && $posts->count() > 0)
            @foreach ($posts as $post)
            <div class="mb-4">
                <a href="" class="font-bold">{{ $post->user->name }}</a>
                <span class="text-gray-600 text-sm">{{ $post->created_at->diffForHumans() }}</span>
                <p class="mb-2">{{ $post->body }}</p>
                <div class="flex items-center">
                    <form action="{{route('posts.likes', $post->id)}}" class="mr-2" method="post">
                        @csrf
                        <button type="submit" class="text-blue-500">Curti</button>
                    </form>
                    <form action="{{route('posts.unlikes', $post->id)}}" class="ml-4" method="post"> 
                        @csrf
                        <button type="submit" class="text-blue-500">Não curti</button>
                    </form>         

                    <span class="ml-5">{{ optional($post->likes)->count() ?? 0 }}  {{Str::plural('Like', optional($post->likes)->count() ?? 0)}}</span>

                    <span class="ml-5">{{ optional($post->unlikes)->count() ?? 0 }}  {{Str::plural('Dislike', optional($post->unlikes)->count() ?? 0)}}</span>
                    
                </div>
                
            </div>
            @endforeach
            {{$posts->links('tailwind.tailwind')}}          
            
            @else
            <p>Não há nenhum post.</p>
            @endif
            
            
        </div>
    </div>
@endsection