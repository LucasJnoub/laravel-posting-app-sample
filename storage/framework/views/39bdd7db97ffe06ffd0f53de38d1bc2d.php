

<?php $__env->startSection('content'); ?>
    <div class="flex justify-center">
        <div class="w-8/12 bg-white p-6 rounded-lg">
            <h1 class="text-2xl font-bold mb-4">Welcome to Your Website</h1>
            <p class="text-lg mb-4">This is a simple example of a welcome page.</p>
            <?php if(auth()->user()): ?>
                <p class="text-lg">You are logged in as <?php echo e(auth()->user()->name); ?>.</p>
            <?php else: ?>
                <p class="text-lg">Please <a href="<?php echo e(route('login')); ?>" class="text-blue-500">login</a> or <a href="<?php echo e(route('register')); ?>" class="text-blue-500">register</a> to continue.</p>
            <?php endif; ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\posty\resources\views/welcome.blade.php ENDPATH**/ ?>