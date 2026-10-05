@props(['post'])

<div>
    <h2>{{ $post->title }}</h2>
    <p>{{ $post->content }}</p>

    {{ $slot }}
</div>