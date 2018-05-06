@extends('layout.master')

@section('heading', 'Open Source')

@section('subheading', 'Be passionate.')

@section('background_image', url('/pics/open-source.jpg'))

@section('content')

    <p>
        All my work has always been released under the Open Source license MIT, and this will continue into the far future. It has cost me thousands of hours to develop, test and support Laravel Zero, Collision, etc.
    </p>

    <p>
        If you find the work I do for the PHP community valuable then you can show your appreciation by supporting me here on <a href="https://www.patreon.com/nunomaduro" target="_blank">Patreon</a> or <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=66BYDWAT92N6L" target="_blank">Paypal</a>.
    </p>

    <p>
        Below there is selection of open source projects I've authored or actively contributed to. There's a bigger list on my <a href="https://github.com/nunomaduro" target="_blank">GitHub profile</a>.
    </p>

    <div class="row">
    @foreach ($projects as $project)
    <div class="col-md-6">
        @include('projects.show', ['project' => $project])
    </div>
    @endforeach
    </div>
@endsection
