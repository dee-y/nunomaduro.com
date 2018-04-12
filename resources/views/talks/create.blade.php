@extends('layout.master')

@section('heading', 'Talks')

@section('subheading', 'You must expose yourself to criticism.')

@section('content')
    @include('talks.partials.form', ['action' => route('talks.store'), 'talk' => $talk])
@endsection
