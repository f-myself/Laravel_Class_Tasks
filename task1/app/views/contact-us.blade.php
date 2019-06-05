@extends('layout')

@section('content')
@if($error)
    <span style="padding: 10px; color: red;">{{$error}}</span>
@endif
<form method="POST" action="contact-us">
    <label>Name<br>
    <input name="name" type="text">
    </label><br>
    <label>Message<br>
    <textarea name="message"></textarea>
    </label><br>
    <button type="submit">Send</button>
</form>
@stop