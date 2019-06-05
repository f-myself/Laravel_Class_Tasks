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

Route::get('/', "HomeController@showHome");

Route::get('/home', "HomeController@showHome");

Route::get('/articles', "HomeController@showArticles");

Route::get('/about', "HomeController@showAbout");

Route::get('/contact-us', "HomeController@showContact");

Route::post('/contact-us', "HomeController@showContact");

Route::get('/article/{index}', "HomeController@showArticle");

Route::get('/thank-you', array('as'=>'thank-you', 'uses' => "HomeController@showThanks"));