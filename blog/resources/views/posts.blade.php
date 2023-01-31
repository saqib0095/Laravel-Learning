@extends ('layouts')

@section('content')
    @foreach ($posts as $post)
        <article>
        <a href="/posts/<?= $post->slug; ?>">
                <h1>
                {{!! $post->title}}
                </h1>
        </a>
        <p>
            <a href="#">{{$post->category->name}}</a>
        </p>
            <div>
                
                {{$post->excerpt}}
            </div>
            </div>
        </article>
    @endforeach
@endsection