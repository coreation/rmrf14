@extends('layouts.master')

@section('content')

<ul class="nav nav-tabs">
  <li class="active"><a href="#">Topvragen</a></li>
  <li><a href="#"><span class="badge">42</span> In de kijker</a></li>
  <li><a href="#">Populair</a></li>
  <li><a href="#">Deze week</a></li>
  <li><a href="#">Deze maand</a></li>
</ul>

<div id="questions">
	@for ($i = 0; $i < 10; $i++)
	<div class="question">
		<div class="stats">
			<div class="votes">
				<div class="count">{{ $faker->randomNumber(2) }}</div>
				<div>votes</div>
			</div>
			@if ($i == 3 or $i == 8 or $i == 4)
			<div class="answers answered">
			@else
			<div class="answers">
			@endif
				<div class="count">{{ $faker->randomNumber(1) }}</div>
				<div>answers</div>
			</div>
			<div class="views">
				<div class="count">{{ $faker->randomNumber(1) }}</div>
				<div>views</div>
			</div>
		</div>
		<div class="summary">
			<h3><a href="{{ URL::to('/questions') }}">{{  $questions[$faker->randomNumber(0,3)] }}</a></h3>
			<div class="tags">
				<a href="#" class="label label-default">{{ $faker->text(10) }}</a>
				<a href="#" class="label label-default">{{ $faker->text(10) }}</a>
				<a href="#" class="label label-default">{{ $faker->text(10) }}</a>
			</div>
			<div class="started">{{ $faker->randomNumber(1) }} minuten geleden <a href="#">{{ $faker->firstName, ' ', $faker->lastName}}</a> {{ $faker->randomNumber(2) }}</div>
		</div>
	</div>
	@endfor
</div>

@stop
