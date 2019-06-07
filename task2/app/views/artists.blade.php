@extends('layout')

@section('content')
<h1>List of artists</h1>

    @if($artists)
    <ul>
        @foreach($artists as $artist)
            <li><a href="artist/{{$artist['ArtistId']}}">{{$artist['Name']}}</a></li>
        @endforeach
    </ul>
        {{$artists->links()}}
    @endif

@stop