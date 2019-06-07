<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', "MainController@showArtists");

Route::get('/artist/{id}', "MainController@showAlbums");
Route::get('/album/{id}', "MainController@showTracks");
Route::get('/track/{id}', "MainController@showTrackInfo");