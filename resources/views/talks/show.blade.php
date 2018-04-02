<h2 class="section-heading text-center">{{ $talk->title }}</h2>
<a href="#">
    @if (! empty($talk->youtube_src))
    <iframe width="100%" height="315" src="{{ $talk->youtube_src }}?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    @elseif (! empty($talk->twitter_src))
        {!! $talk->twitter_src !!}
    @endif
</a>

<span class="caption text-muted">{{ $talk->place }}</span>

<p>{!! $talk->description !!}</p>

@if ($talk->spearkerdeck_src)
    <p>Presentation link at
        <a href="{{ $talk->spearkerdeck_src }}">SpearkersDeck</a>.
    </p>
@endif
