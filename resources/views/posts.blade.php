{{ $posts->links('customT') }}
@foreach ($posts as $post)

    <article>
        <h2>{{ $post->title }}</h2>
        {{ $post->description }}
    </article>

@endforeach

{{ $posts->links('custom') }}

