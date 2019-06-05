<?php

class HelloController extends BaseController
{
	public function showHello()
	{
		$name = Input::old('name');
		$list = array(
			'About' => '/about',
			'Contact' => '/contact',
			'Terms and Conditions' => '/tos'
		);
		return View::make('hello2', array('name'=>$name, 'urls'=>$list));
	}
	public function showForm()
	{
		return View::make('form');
	}

	public function postSubmit()
	{
		if(Input::has('name'))
		{
			// $name = Input::get('name');
			return Redirect::action('HelloController@showHello')->withInput();
		}
		return Redirect::route('form');
	}

	public function dbTest($id)
	{
		// $user = DB::table('users')->where('id', '=', $id)->select('email')->get();
		// $user = DB::table('users')->where('name', 'test')->orWhere(function($query){
		// 	$query->where('name', 'test2')->where('id', 3);
		// })->get();
		// $tracks = Track::where('Milliseconds', '>', 5*60*1000)->get();
		// $tracks = Track::skip(100)->take(10)->get();
		// $tracks = Artist::skip(100)->take(10)->get();
		// return View::make('songList', compact('tracks'));
		// $artist = Artist::find($id);
		// $albums = $artist->albums;
		// foreach($albums as $album)
		// {
		// 	echo $album->Title . "(" . $album->artist->Name . ")";
		// 	echo "<br />";
		// 	$tracks = $album->tracks;
		// 	foreach($tracks as $track)
		// 	{
		// 		echo " - " . $track->Name . "(" . $track->album->Title . ")";
		// 		echo "<br />";
		// 	}
		// }

		// var_dump($artist->tracks);
		// $album = Album::find($id);
		// $tracks = $album->tracks;
		// foreach($tracks as $track)
		// {
		// 	echo $track->Name;
		// 	echo "<br />";
		// }
		// var_dump($tracks);

		

	}
}