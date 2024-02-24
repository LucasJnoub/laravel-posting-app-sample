<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>

  <title>Posty</title>
</head>
<body class="bg-gray-300">
  <nav class="p-6 bg-white flex justify-between mb-6" >
    <ul class="flex items-center">
      <li>
        <a href="/" class="p-3">Home</a>
      </li>

      <li>
        <a href="<?php echo e(route('dashboard')); ?>" class="p-3">Dashboard</a>
      </li>

      <li>
        <a href="<?php echo e(route('posts')); ?>" class="p-3">
          Posts
        </a>
      </li>


    </ul>
    <ul class="flex items-center">
      <?php if(auth()->user()): ?>
      <li>
        <a href="" class="p-3"><?php echo e(auth()->user()->name); ?></a>
      </li>

      <li>
        <a href="<?php echo e(route('logout')); ?>" class="p-3">
          Logout
        </a>
      </li>          
      <?php else: ?>
          
      <li>
        <a href="<?php echo e(route('login')); ?>" class="p-3">Login</a>
      </li>

      <li>
        <a href="<?php echo e(route('register')); ?>" class="p-3">
          Register
        </a>
      </li>    
      <?php endif; ?>      
          
      



    </ul>
  </nav>
   <?php echo $__env->yieldContent('content'); ?>
   <script src="<?php echo e(asset('/sw.js')); ?>"></script>

</body>
</html><?php /**PATH C:\laragon\www\posty\resources\views/layouts/app.blade.php ENDPATH**/ ?>