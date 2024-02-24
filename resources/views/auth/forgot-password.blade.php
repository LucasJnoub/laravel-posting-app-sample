{{-- 
@extends('layouts.app')

@section('content')
<div class="flex items-center justify-center mt-20">

  <div class="w-full max-w-md">

    <div class="bg-white rounded shadow-lg p-6">

      <h1 class="text-3xl font-bold mb-6">Reset Password</h1>

      @if (session('status'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
          {{ session('status') }}
        </div>
      @endif

      <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <div class="mb-4">
          <label class="block text-gray-700 font-bold mb-2" for="email">
            Email Address
          </label>

          <input 
            id="email" 
            type="email"
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('email') border-red-500 @enderror"
            name="email"
            value="{{ old('email') }}" 
            required
            autocomplete="email" 
            autofocus>

            @error('email')
              <p class="text-red-500 text-xs italic mt-4">
                {{ $message }}
              </p>
            @enderror
        </div>

        <div class="flex items-center justify-between">
          <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
            Reset Password
          </button>
        </div>
      </form>

    </div>

  </div>

</div>
@endsection --}}
