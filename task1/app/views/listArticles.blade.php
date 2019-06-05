@extends('layout')

@section('content')
<h2>Articles</h2>
@if($articles)
<ul>
@foreach($articles as $url=>$title)
    <li><a href="article/{{$url + 1}}">{{$title}}</a></li>
@endforeach
@endif

@stop