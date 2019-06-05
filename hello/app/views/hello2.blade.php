@extends('layout')

@section('content')
	<h1>Hello, {{$name}}!</h1>

<!-- <form method="POST" >
<input name="name">
<button type="submit">Send</button>
</form> -->
@stop


@section('footer')
@parent
<br>Email: test@test.me
@if($urls)
@foreach($urls as $title=>$url)
<li><a href="{{$url}}">{{$title}}</a></li>
@endforeach
@endif
@stop
