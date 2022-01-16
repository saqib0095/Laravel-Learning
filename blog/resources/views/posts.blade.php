<!DOCTYPE html>

<title>My Blog</title>
<link rel="stylesheet" href="/app.css">

<body>
    <?php foreach ($posts as $post) { ?>
        <article>
            <h1>
                <a href="/posts/<?= $post->slug; ?>"></a>
                <?= $post->title; ?>
            </h1>

            <div>
                <?= $post->excerpt ?> </div>
            </div>
        </article>
    <?php } ?>
</body>
