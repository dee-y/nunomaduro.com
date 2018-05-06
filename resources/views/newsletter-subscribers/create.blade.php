@extends('layout.master')

@section('heading', 'Newsletter')

@section('subheading', 'Just a monthly newsletter.')

@section('content')
<p>Get news and announcements about my work delivered right to your inbox once per month.</p>
<span class="caption text-muted">I'll never share your email address or spam you.</span>

<form action="{{ route('newsletter-subscribers.store') }}" method="POST">
    @csrf
    <div class="control-group">
        <div class="form-group floating-label-form-group controls">
            <label>Email</label>
            <input type="email" name="email" class="form-control" placeholder="Your email..." required>
            <p class="help-block text-danger"></p>
        </div>
    </div>
    <br>
    <div class="form-group">
        <button type="submit" class="btn btn-primary" id="sendMessageButton">Send</button>
    </div>
</form>
@endsection
