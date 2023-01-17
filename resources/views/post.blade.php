@extends('layouts.main')

@section('container')
    @foreach ($posts as $post)
        <article class="mb-5 border-bottom pb-4">
            <h2>
               <a href="/blog/{{ $post->slug}}" class="text-decoration-none"> {{ $post->title }}</h2></a>
            <h5>{{ $post['author'] }}</h5>
            <p>By. <a href="/blog">Marsella</a> in <a href="/blog" class="text-decoration-none">web-programming</a></p>
            <p>{{ $post['excerpt'] }}</p>

            <a href="/blog/{{ $post->slug}}" class="text-decoration-none">Read more..</a>
        </article>
    @endforeach
@endsection
