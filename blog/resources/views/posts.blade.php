@extends ('layouts')

@section('content')
    @foreach ($posts as $post)
        <article>
            <h1>
                <a href="/posts/<?= $post->id; ?>"></a>
                
                {{$post->title}}
            </h1>

            <div>
                
                {{$post->excerpt}}
            </div>
            </div>
        </article>
    @endforeach
@endsection