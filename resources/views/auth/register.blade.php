@extends('layouts.app')
@section('content')

<div class="flex justify-center"> 
  <div class="w-4/12 bg-white p-6 rounded-lg">
    <form action="{{route('register')}}" method="post">
      @csrf
      <div class="mb-4">
        <label for="name" class="sr-only">Name</label>
        <input type="text" name="name" id="name" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('name') border-red-500 @enderror" value="{{old('name')}}" placeholder="Seu nome">
        @error('name')
          <div class="text-red-500 mt-2 text-sm">
            {{$message}}
          </div>            
        @enderror
      </div>
      <div class="mb-4">
        <label for="email" class="sr-only">Email</label>
        <input type="email" name="email" id="email" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('name') border-red-500 @enderror" value="{{old('email')}}"  placeholder="Seu Email">
        @error('email')
        <div class="text-red-500 mt-2 text-sm">
          {{$message}}
        </div>            
      @enderror
      </div>
      <div class="mb-4">
        <label for="password" class="sr-only">Senha</label>
        <input type="password" name="password" id="password" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('name') border-red-500 @enderror" value=""  placeholder="Sua senha">
        @error('password')
        <div class="text-red-500 mt-2 text-sm">
          {{$message}}
        </div>            
      @enderror
      </div>
      <div class="mb-4">
        <label for="password_confirmation" class="sr-only">Confirmação de Senha</label>
        <input type="password" name="password_confirmation" id="password_confirmation" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('name') border-red-500 @enderror" value=""  placeholder="Repita sua senha">
        @error('password_confirmation')
        <div class="text-red-500 mt-2 text-sm">
          {{$message}}
        </div>            
      @enderror
      </div>

      <div>
        <button type="submit" class="bg-blue-500 text-white p-4 py-3 rounded-lg font-medium w-full">Registrar</button>
      </div>
    </form>
  </div>
</div>
    
@endsection
