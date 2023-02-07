<?php $__env->startSection('content'); ?>
    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <article>
        <a href="/posts/<?= $post->slug; ?>">
                <h1>
                
                <?php echo e($post->title); ?>

                </h1>
        </a>
        <p>
            By <a href="/authors/<?php echo e($post->author->username); ?>"><?php echo e($post->author->name); ?></a> in  <a href="/categories/<?php echo e($post->category->slug); ?>"><?php echo e($post->category->name); ?></a>
        </p>
            <div>
                
                <?php echo e($post->excerpt); ?>

            </div>
            </div>
        </article>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <button class="btn btn-primary"><a href="/">Go Baack</a></button>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/Laravel-Learning/html/blog/resources/views/posts.blade.php ENDPATH**/ ?>