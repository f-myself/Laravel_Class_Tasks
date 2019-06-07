<?php

class MainController extends BaseController 
{
    public function showArtists()
    {
        $artists = Artist::paginate(30);
        return View::make('artists', compact('artists'));
    }

    public function showAlbums($id)
    {
        $artist = Artist::find($id);
        $albums = $artist->albums;
        return View::make('albums', compact('albums'));
    }

    public function showTracks($id)
    {
        $album = Album::find($id);
        $artist = $album->artist;
        $tracks = $album->tracks;

        // print "<pre>";
        // var_dump($tracks);
        // print "</pre>";

        return View::make('tracks', compact('tracks', 'artist'));
    }

    public function showTrackInfo($id)
    {
        $track = Track::find($id);
        $album = $track->album;
        $artist = $album->artist;
        $genre = $track->genre;
        return View::make('trackInfo', compact('track', 'album', 'artist', 'genre'));
    }
}