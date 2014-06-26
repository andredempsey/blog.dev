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

Route::get('/', function (){
	return View::make('temp.my-first-view');
});

Route::get('/rolldice', function (){
    $data = array(
	'roll' => mt_rand(1,6)
	);
	return View::make('temp.roll-dice')->with($data);
});

Route::get('/resume', function()
{
        return "This is my resume.";
});

Route::get('/portfolio', function()
{
        return "This is my portfolio.";
});

Route::get('/sayhello/{name}', function($name)
{
    if ($name == "Chris")
    {
        return Redirect::to('/');
    }
    else
    {
        //method 1 for passing data to a view
        $data = array(
			'name'=>$name
        	);

        return View::make('my-first-view')->with($data);

        //method 2 for passing data to a view
        // return View::make('my-first-view')->with('name',$name);
    }
});