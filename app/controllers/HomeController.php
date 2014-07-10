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

	public function showHomePage()
	{
		return View::make('home');
	}

	public function showRegister()
	{
		return View::make('register');
	}
	public function showAdmin()
	{
		if(Auth::check() && (Auth::user()->is_admin))
		{
			return View::make('errors.admin');
		}
		else
		{
			Session::flash('errorMessage', 'Insufficient Privileges.');
			return Redirect::action('HomeController@showLogin');
		}	
	}
	public function doRegister()
	{
		$messageValue = 'Successfully registered!';
		$eMessageValue = 'There was a problem registering.';
		$user = new User();

		$validator = Validator::make(Input::all(), User::$user_rules);
		if ($validator->fails()) 
		{
			Session::flash('errorMessage', $eMessageValue);
			return Redirect::back()->withInput()->withErrors($validator);
		}
		else
		{
			$user->first_name = Input::get('firstname');
			$user->last_name = Input::get('lastname');
			$user->email = Input::get('email');
			$user->password = Hash::make(Input::get('password'));
			$user->is_admin = False;
			$user->is_subscribed = Input::get('newsletter');
			$user->save();		
			Session::flash('successMessage', $messageValue);
			return Redirect::action('HomeController@showLogin');
		}
	}

	public function showLogin()
	{
		return View::make('login');
	}

	public function showTermsPrivacy()
	{
		return View::make('terms-privacy');
	}
	public function doLogin()
	{
		$email = Input::get('email');
		$password = Input::get('password');
		if (Auth::attempt(array('email' => $email, 'password' => $password))) 
		{
			Session::flash('successMessage', 'You have successfully logged in.');
			return Redirect::intended(action('PostsController@index'));
		}
		else
		{
			Session::flash('errorMessage', 'Email or password not found.');
			return Redirect::action('HomeController@showLogin')->withInput();
		}

	}
	public function logout()
	{
		Auth::logout();
		Session::flash('successMessage', 'You have successfully logged out.');
		return Redirect::action('PostsController@index');
	}

	public function showResume()
	{
		return View::make('resume');
	}

	public function showPortfolio()
	{
		return View::make('portfolio');
	}

}
