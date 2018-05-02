@extends('layout.master')

@section('heading', 'Talks')

@section('subheading', 'You must expose yourself to criticism.')

@section('background_image', url('/pics/talks.jpg'))

@section('content')

    @foreach ($talks as $talk)
        {!! $talk !!}
        <hr>
    @endforeach

@endsection
