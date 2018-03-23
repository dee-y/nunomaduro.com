@extends('layout.master')

@section('heading', 'Talks')

@section('subheading', 'You must expose yourself to criticism.')

@section('content')
    @foreach ($talks as $talk)
        @include('talks.show', ['talk' => $talk])
        <hr>
    @endforeach
@endsection
