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

// Default page
Route::get('/', function()
{
	return Redirect::route('game');
});

// Game page
Route::get('play', array('as' => 'game', 'uses' => 'HomeController@index'));

// Restful packages
Route::resource('highscores', 'HighscoresController');
Route::resource('social', 'SocialController');