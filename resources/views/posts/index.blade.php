@extends('layout.master')

@section('content')
    @foreach ($posts as $post)
        <div class="post-preview">
            <a href="{{ $post->url }}">
                <h2 class="post-title">
                    {{ $post->title }}
                </h2>
                <h3 class="post-subtitle">
                    {{ $post->subtitle }}
                </h3>
            </a>
            <p class="post-meta">Posted in
                <a href="#">Medium</a>
                on {{$posts[0]->publishedAt}}
            </p>
        </div>
        <hr>
    @endforeach
@endsection
