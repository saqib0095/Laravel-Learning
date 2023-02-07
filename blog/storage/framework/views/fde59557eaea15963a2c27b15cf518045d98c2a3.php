<!DOCTYPE html>

<title>My Blog</title>
<link rel="stylesheet" href="/app.css">

<body>
    <h1>
        <?= $post->title; ?>
    </h1>
    <p>
        By <a href="/authors/<?php echo e($post->author->username); ?>"><?php echo e($post->author->name); ?></a> in
        <a href="/categories/<?php echo e($post->category->slug); ?>"><?php echo e($post->category->name); ?></a>
    </p>
    <article>
        <?= $post->body; ?>
    </article>
    <a href="/">Go Baack</a>
</body>
<?php /**PATH /var/www/Laravel-Learning/html/blog/resources/views/post.blade.php ENDPATH**/ ?>