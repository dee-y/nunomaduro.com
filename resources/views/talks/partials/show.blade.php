<h2 class="section-heading text-center">{{ $talk->title }}</h2>

{!! $talk->src !!}

<span class="caption text-muted">{{ $talk->place }}</span>

{!! $talk->description !!}

@auth

    <form action="{{ route('talks.destroy', ['id' => $talk->id]) }}" method="POST">
        <input type="hidden" name="_method" value="DELETE">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <a href="{{ route('talks.edit', ['id' => $talk->id]) }}" class="btn btn-warning btn-sm" >Edit</a>
        <button class="btn btn-danger btn-sm" >Delete</button>
    </form>
@endauth