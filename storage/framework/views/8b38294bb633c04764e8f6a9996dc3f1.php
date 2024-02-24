

<?php $__env->startSection('content'); ?>
    <div class="flex flex-col items-center gap-10">
        <div class="w-8/12 bg-white p-6 rounded-lg shadow-md text-center">
            <h1 class="text-2xl font-bold"><?php echo e($user->name); ?></h1>
        </div>
        <div class="w-8/12">
            <h2 class="text-xl font-bold mb-4">Posts</h2>
            <?php $__currentLoopData = $user->posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="bg-white p-6 rounded-lg shadow-md mb-4">
                    <p class="text-gray-500"><?php echo e($post->created_at->diffForHumans()); ?></p>
                    <p class="text-lg font-bold"><?php echo e($post->body); ?></p>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\posty\resources\views/users/posts/index.blade.php ENDPATH**/ ?>