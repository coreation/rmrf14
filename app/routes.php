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
	$questions = array( 'Grote tak is van boom gevallen',
						'Vuilnisbakken tekort bij Sint-Pieters plein',
						'Hoe lang duren de werken nog?',
						'Toilet kapot');

	return View::make('home', array('faker' => $faker, 'questions' => $questions));
});

Route::get('/questions', function()
{
	$faker = Faker\Factory::create();
	
	$questions = array( 'Grote tak is van boom gevallen',
						'Vuilnisbakken tekort bij Sint-Pieters plein',
						'Hoe lang duren de werken nog?',
						'Toilet kapot');

	return View::make('question', array('faker' => $faker, 'questions' => $questions));
});

Route::get('/ask', function()
{
	return View::make('ask');
});

Route::get('/testrepos', 'TestController@testDb');
