<!DOCTYPE html>

<title>My Blog</title>
<link rel="stylesheet" href="/app.css">

<body>
    <h1>
        <?= $post->title; ?>
    </h1>
    <p>
        By <a href="/authors/{{$post->author->username}}">{{$post->author->name}}</a> in
        <a href="/categories/{{$post->category->slug}}">{{$post->category->name}}</a>
    </p>
    <article>
        <?= $post->body; ?>
    </article>
    <a href="/">Go Baack</a>
</body>
