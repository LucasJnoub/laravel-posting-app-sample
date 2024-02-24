@extends('layouts.app')
@section('content')

<div class="flex justify-center">
  <div class="w-full sm:w-4/5 md:w-3/5 lg:w-2/5 xl:w-1/3 bg-white p-6 rounded-lg mt-10 mr-10 ml-10">
    @if (session('status'))
    <div class="bg-red-500 p-2 rounded-lg mb-4 text-white text-center">
      {{session('status')}}
    </div>
    @endif
    <form action="{{route('login')}}" method="post">
      @csrf
      <div class="mb-4">
        <label for="email" class="sr-only">Email</label>
        <input type="email" name="email" id="email" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('name') border-red-500 @enderror" value="{{old('email')}}" placeholder="Seu Email">
        @error('email')
        <div class="text-red-500 mt-2 text-sm">
          {{$message}}
        </div>
        @enderror
      </div>
      <div class="mb-4">
        <label for="password" class="sr-only">Senha</label>
        <input type="password" name="password" id="password" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('name') border-red-500 @enderror" value="" placeholder="Sua senha">
        @error('password')
        <div class="text-red-500 mt-2 text-sm">
          {{$message}}
        </div>
        @enderror
      </div>
      <div class="mb-4">
        <div class="flex items-center">
          <input type="checkbox" class="mr-2" id="remember" name="remember">
          <label for="remember">Lembrar</label>
        </div>
      </div>
      <div>
        <button type="submit" class="bg-blue-500 text-white p-4 py-3 rounded-lg font-medium w-full">Entrar</button>
      </div>
    </form>
  </div>
</div>

@endsection
