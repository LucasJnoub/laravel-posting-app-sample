<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  @vite('resources/css/app.css')

  <title>Posty</title>
</head>
<body class="bg-gray-300">
  <nav class="p-6 bg-white flex justify-between mb-6" >
    <ul class="flex items-center">
      <li>
        <a href="/" class="p-3">Home</a>
      </li>

      <li>
        <a href="{{route('dashboard')}}" class="p-3">Dashboard</a>
      </li>

      <li>
        <a href="{{route('posts')}}" class="p-3">
          Posts
        </a>
      </li>


    </ul>
    <ul class="flex items-center">
      @if (auth()->user())
      <li>
        <a href="" class="p-3">{{auth()->user()->name}}</a>
      </li>

      <li>
        <a href="{{route('logout')}}" class="p-3">
          Logout
        </a>
      </li>          
      @else
          
      <li>
        <a href="{{route('login')}}" class="p-3">Login</a>
      </li>

      <li>
        <a href="{{route('register')}}" class="p-3">
          Register
        </a>
      </li>    
      @endif      
          
      



    </ul>
  </nav>
   @yield('content')
   <script src="{{ asset('/sw.js') }}"></script>

</body>
</html>