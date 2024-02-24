    

    <?php $__env->startSection('content'); ?>
        <div class="flex justify-center">
            <div class="w-8/12 bg-white p-6 rounded-lg">
                <form action="<?php echo e(route('posts')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <div class="mb-4">
                        <label for="body" class="sr-only">Body</label>
                        <textarea name="body" id="body" cols="30" rows="4" class="bg-gray-100 border-2 w-full p-4 rounded-lg <?php $__errorArgs = ['body'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> border-red-500 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Oq você está pensando?"></textarea>

                        <?php $__errorArgs = ['body'];
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

                        <div>
                            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded font-medium">
                                Postar
                            </button>
                        </div>
                    </div>
                </form>
                
                <?php if(isset($posts) && $posts->count() > 0): ?>
                <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="mb-4">
                    <a href="<?php echo e(route('users.posts', $post->user)); ?>" class="font-bold"><?php echo e($post->user->name); ?></a>
                    <span class="text-gray-600 text-sm"><?php echo e($post->created_at->diffForHumans()); ?></span>
                    <p class="mb-2"><?php echo e($post->body); ?></p>
                    <div class="flex items-center">
                        <?php if(auth()->guard()->check()): ?>
                            
                        <form action="<?php echo e(route('posts.likes', $post->id)); ?>" class="mr-2" method="post">
                            <?php echo csrf_field(); ?>
                            <button type="submit" class="text-blue-500">Curti</button>
                        </form>
                        <form action="<?php echo e(route('posts.unlikes', $post->id)); ?>" class="ml-4" method="post"> 
                            <?php echo csrf_field(); ?>
                            <button type="submit" class="text-blue-500">Não curti</button>
                        </form>     

                        
                        
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('delete', $post)): ?>
                            
                        <form action="<?php echo e(route('posts.destroy', $post)); ?>" method="post">
                            <?php echo method_field('DELETE'); ?>
                            <?php echo csrf_field(); ?>
                            <button class="text-blue-500 ml-4" type="submit">
                                Delete   
                            </button>    
                        </form>
                        <?php endif; ?>
                        
                        <?php endif; ?>
                        
                        <span class="ml-5"><?php echo e(optional($post->likes)->count() ?? 0); ?>  <?php echo e(Str::plural('Like', optional($post->likes)->count() ?? 0)); ?></span>

                        <span class="ml-5"><?php echo e(optional($post->unlikes)->count() ?? 0); ?>  <?php echo e(Str::plural('Dislike', optional($post->unlikes)->count() ?? 0)); ?></span>
                        
                    </div>
                    
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php echo e($posts->links('tailwind.tailwind')); ?>          
                
                <?php else: ?>
                <p>Não há nenhum post.</p>
                <?php endif; ?>
                
                
            </div>
        </div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\posty\resources\views/posts/index.blade.php ENDPATH**/ ?>