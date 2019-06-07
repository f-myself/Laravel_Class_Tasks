@extends('layout')

@section('content')
<h1>List of Albums</h1>

    @if($albums)
    <ul>
        @foreach($albums as $album)
            <li><a href="{{url("/album/{$album['AlbumId']}")}}">{{$album['Title']}}</a></li>
        @endforeach
    </ul>
    @endif

@stop