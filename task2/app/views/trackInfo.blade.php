@extends('layout')

@section('content')
<h1>Track info</h1>

    @if($track && $album && $artist && $genre)
    <table class="table">
        <tbody>
            <tr>
                <th scope="row">Name</th>
                <td>{{$track['Name']}}</td>
            </tr>
            <tr>
                <th scope="row">Artist</th>
                <td>{{$artist['Name']}}</td>
            </tr>
            <tr>
                <th scope="row">Album</th>
                <td>{{$album['Title']}}</td>
            </tr>
            <tr>
                <th scope="row">Genre</th>
                <td>{{$genre['Name']}}</td>
            </tr>
            <tr>
                <th scope="row">Composer</th>
                <td>{{$track['Composer']}}</td>
            </tr>
            <tr>
                <th scope="row">Price</th>
                <td>{{$track['UnitPrice']}}$</td>
            </tr>
        </tbody>
    </table>
    <a href="{{url()}}" class="btn btn-primary center">Return To Home Page</a>
    @endif

@stop