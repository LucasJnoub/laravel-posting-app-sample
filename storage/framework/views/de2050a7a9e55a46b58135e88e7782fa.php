<?php if($paginator->hasPages()): ?>
    <nav role="navigation" aria-label="<?php echo e(__('Pagination Navigation')); ?>" class="flex justify-end items-center mt-6">
        <ul class="flex space-x-2">
            
            <?php if($paginator->onFirstPage()): ?>
                <li class="relative inline-flex items-center px-2 py-1 text-sm font-medium text-gray-500 bg-white border border-gray-300 cursor-default leading-5 rounded-md">
                    <?php echo __('pagination.previous'); ?>

                </li>
            <?php else: ?>
                <li>
                    <a href="<?php echo e($paginator->previousPageUrl()); ?>" rel="prev" class="relative inline-flex items-center px-2 py-1 text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 rounded-md hover:text-gray-500 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150" aria-label="<?php echo e(__('pagination.previous')); ?>">
                        <?php echo __('pagination.previous'); ?>

                    </a>
                </li>
            <?php endif; ?>

            
            <?php $__currentLoopData = $elements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
                <?php if(is_string($element)): ?>
                    <li class="relative inline-flex items-center px-2 py-1 text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 rounded-md cursor-default"><?php echo e($element); ?></li>
                <?php endif; ?>

                
                <?php if(is_array($element)): ?>
                    <?php $__currentLoopData = $element; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($page == $paginator->currentPage()): ?>
                            <li class="relative inline-flex items-center px-2 py-1 text-sm font-medium text-white bg-blue-500 border border-blue-500 leading-5 rounded-md"><?php echo e($page); ?></li>
                        <?php elseif($page == $paginator->currentPage() - 1 || $page == $paginator->currentPage() + 1): ?>
                            <li><a href="<?php echo e($url); ?>" class="relative inline-flex items-center px-2 py-1 text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 rounded-md hover:text-gray-500 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150"><?php echo e($page); ?></a></li>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            
            <?php if($paginator->hasMorePages()): ?>
                <li>
                    <a href="<?php echo e($paginator->nextPageUrl()); ?>" rel="next" class="relative inline-flex items-center px-2 py-1 text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 rounded-md hover:text-gray-500 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150" aria-label="<?php echo e(__('pagination.next')); ?>">
                        <?php echo __('pagination.next'); ?>

                    </a>
                </li>
            <?php else: ?>
                <li class="relative inline-flex items-center px-2 py-1 text-sm font-medium text-gray-500 bg-white border border-gray-300 cursor-default leading-5 rounded-md">
                    <?php echo __('pagination.next'); ?>

                </li>
            <?php endif; ?>
        </ul>
    </nav>
<?php endif; ?>
<?php /**PATH C:\laragon\www\posty\resources\views/tailwind/tailwind.blade.php ENDPATH**/ ?>