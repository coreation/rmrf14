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

Route::get('/', function()
{
	$faker = Faker\Factory::create();

	return View::make('home', array('faker' => $faker));
});

Route::get('/questions', function()
{
	return View::make('question');
});

Route::get('/ask', function()
{
	return View::make('ask');
});

Route::get('/testrepos', 'TestController@testDb');
