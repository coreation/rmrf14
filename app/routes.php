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
	$faker = Faker\Factory::create('nl_NL');
	$faker->addProvider(new Faker\Provider\nl_BE\Person($faker));
	$questions = array( 'Grote tak is van boom gevallen',
						'Vuilnisbakken tekort bij Sint-Pieters plein',
						'Hoe lang duren de werken aan de Voskenslaan nog?',
						'Toilet kapot aan Dampoort',
						'Meer vuilbakken nodig bij Gentbrugse Meersen',
						'Geen straatverlichting meer in De Pinte',
						'Wanneer zijn de Gentse Feesten?',
						'Tot hoe laat is het Gravensteen open?',
						'Grote putten in Jef Vandermeulenstraat',
						'Op zoek naar gezellige terrasjes in Gent!',
						'Wat is er momenteel te doen in Gent?');

	return View::make('home', array('faker' => $faker, 'questions' => $questions));
});

Route::get('/questions', function()
{
	$faker = Faker\Factory::create('nl_NL');

	$questions = array( 'Grote tak is van boom gevallen',
						'Vuilnisbakken tekort bij Sint-Pieters plein',
						'Hoe lang duren de werken aan de Voskenslaan nog?',
						'Toilet kapot aan Dampoort',
						'Meer vuilbakken nodig bij Gentbrugse Meersen',
						'Geen straatverlichting meer in De Pinte',
						'Wanneer zijn de Gentse Feesten?',
						'Tot hoe laat is het Gravensteen open?',
						'Grote putten in Jef Vandermeulenstraat',
						'Op zoek naar gezellige terrasjes in Gent!',
						'Wat is er momenteel te doen in Gent?');

	return View::make('question', array('faker' => $faker, 'questions' => $questions));
});

Route::get('/ask', function()
{
	return View::make('ask');
});

Route::get('/testrepos', 'TestController@testDb');
