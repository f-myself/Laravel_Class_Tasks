@extends('layout')

@section('content')
<h1>{{$artist['Name']}}: Tracklist</h1>

    @if($tracks)
    <ul>
        @foreach($tracks as $track)
            <li><a href="{{url("/track/{$track['TrackId']}")}}">{{$track['Name']}}</a></li>
        @endforeach
    </ul>
    @endif

@stop