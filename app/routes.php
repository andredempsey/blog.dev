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


Route::get('/', 'HomeController@showHomePage');

Route::get('/portfolio', 'HomeController@showPortfolio');

Route::get('/resume', 'HomeController@showResume');

Route::resource('posts', 'PostsController');

Route::get('/orm-test', 'PostsController');

Route::get('/Login', 'HomeController@showLogin');

Route::post('/Login', 'HomeController@doLogin');

Route::get('/Logout', 'HomeController@logout');



