
<?php $__env->startSection('content'); ?>

<div class="flex justify-center">
  <div class="w-full sm:w-4/5 md:w-3/5 lg:w-2/5 xl:w-1/3 bg-white p-6 rounded-lg mt-10 mr-10 ml-10">
    <?php if(session('status')): ?>
    <div class="bg-red-500 p-2 rounded-lg mb-4 text-white text-center">
      <?php echo e(session('status')); ?>

    </div>
    <?php endif; ?>
    <form action="<?php echo e(route('login')); ?>" method="post">
      <?php echo csrf_field(); ?>
      <div class="mb-4">
        <label for="email" class="sr-only">Email</label>
        <input type="email" name="email" id="email" class="bg-gray-100 border-2 w-full p-4 rounded-lg <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-500 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('email')); ?>" placeholder="Seu Email">
        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <div class="text-red-500 mt-2 text-sm">
          <?php echo e($message); ?>

        </div>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
      </div>
      <div class="mb-4">
        <label for="password" class="sr-only">Senha</label>
        <input type="password" name="password" id="password" class="bg-gray-100 border-2 w-full p-4 rounded-lg <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-500 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="" placeholder="Sua senha">
        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <div class="text-red-500 mt-2 text-sm">
          <?php echo e($message); ?>

        </div>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
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

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\posty\resources\views/auth/login.blade.php ENDPATH**/ ?>