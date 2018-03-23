@extends('layout.master')

@section('content')

    <h2 class="section-heading text-center">{{ $talk->title }}</h2>
    <a href="#">
        <iframe width="100%" height="315" src="{{ $talk->youtube_src }}?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    </a>

    <span class="caption text-muted">{{ $talk->place }}</span>

    <p>{!! $talk->description !!}</p>

    @if ($talk->spearkerdeck_src)
    <p>Presentation link at
        <a href="{{ $talk->spearkerdeck_src }}">SpearkersDeck</a>.
    </p>
    @endif

@endsection
