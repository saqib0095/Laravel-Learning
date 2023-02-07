@extends ('layouts')

@section('content')
    @foreach ($posts as $post)
        <article>
        <a href="/posts/<?= $post->slug; ?>">
                <h1>
                
                {{$post->title}}
                </h1>
        </a>
        <p>
            By <a href="/authors/{{$post->author->username}}">{{$post->author->name}}</a> in  <a href="/categories/{{$post->category->slug}}">{{$post->category->name}}</a>
        </p>
            <div>
                
                {{$post->excerpt}}
            </div>
            </div>
        </article>
    @endforeach
    <button class="btn btn-primary"><a href="/">Go Baack</a></button>
@endsection
