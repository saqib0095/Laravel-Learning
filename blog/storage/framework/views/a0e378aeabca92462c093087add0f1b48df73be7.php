<?php $__env->startSection('content'); ?>
    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <article>
        <a href="/posts/<?= $post->slug; ?>"><h1>
                
                
                <?php echo e($post->title); ?>

            </h1></a>

            <div>
                
                <?php echo e($post->excerpt); ?>

            </div>
            </div>
        </article>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/blog/resources/views/posts.blade.php ENDPATH**/ ?>