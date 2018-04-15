@extends('layout.master')

@section('heading', 'Talks')

@section('subheading', 'You must expose yourself to criticism.')

@section('background_image', url('/pics/talks.jpg'))

@section('content')

    @foreach ($talks as $talk)
        @include('talks.partials.show', ['talk' => $talk])
        <hr>
    @endforeach

    @auth
        <a class="btn btn-primary btn-lg btn-block" href="{{ route('talks.create') }}" role="button">Create</a>
    @endauth

@endsection
