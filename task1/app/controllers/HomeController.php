<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	private $articles_titles = array (
		"Title 1",
		"Title 2",
		"Title 3",
		"Title 4",
		"Title 5",
		"Title 6",
		"Title 7",
		"Title 8",
		"Title 9",
		"Title 10"
	);

	private $articles_texts = array (
		"Here is the text of article #1. Read it! Cuz London is the capital of Great Britain!",
		"Here is the text of article #2. Read it! Cuz London is the capital of Great Britain!",
		"Here is the text of article #3. Read it! Cuz London is the capital of Great Britain!",
		"Here is the text of article #4. Read it! Cuz London is the capital of Great Britain!",
		"Here is the text of article #5. Read it! Cuz London is the capital of Great Britain!",
		"Here is the text of article #6. Read it! Cuz London is the capital of Great Britain!",
		"Here is the text of article #7. Read it! Cuz London is the capital of Great Britain!",
		"Here is the text of article #8. Read it! Cuz London is the capital of Great Britain!",
		"Here is the text of article #9. Read it! Cuz London is the capital of Great Britain!",
		"Here is the text of article #10. Read it! Cuz London is the capital of Great Britain!"
	);


	public function showHome()
	{
		return View::make('home');
	}

	public function showArticles()
	{
		$titles = $this->articles_titles;
		return View::make('listArticles', array('articles'=>$titles));
	}

	public function showAbout()
	{
		return View::make('about');
	}

	public function showArticle($index)
	{
		$titles = $this->articles_titles;
		$texts = $this->articles_texts;
		return View::make('article', array('id' => $index));
	}

	public function showContact()
	{
		if($_SERVER['REQUEST_METHOD'] == "POST")
		{
			if(!Input::has('name'))
			{
				return View::make('contact-us', array('error' => "Please, enter your name!"));
			}
			if (!Input::has('message'))
			{
				return View::make('contact-us', array('error' => "Please, enter message!"));
			}
			return Redirect::action('HomeController@showThanks')->withInput();
		} else {
			return View::make('contact-us', array('error' => null));
		}
	}

	public function showThanks()
	{
		$name = Input::old('name');
		return View::make('thank-you', array('name' => $name));
	}

}
