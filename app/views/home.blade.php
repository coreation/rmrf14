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
			<div class="answers">
				<div class="count">{{ $faker->randomNumber(1) }}</div>
				<div>answers</div>
			</div>
			<div class="views">
				<div class="count">{{ $faker->randomNumber(1) }}</div>
				<div>views</div>
			</div>
		</div>
		<div class="summary">
			<h3><a href="{{ URL::to('/questions') }}">{{ $faker->text(60) }}</a></h3>
			<div class="tags">
				<a href="{{ URL::to('/tag') }}" class="label label-default">{{ $faker->text(10) }}</a>
				<a href="{{ URL::to('/tag') }}" class="label label-default">{{ $faker->text(10) }}</a>
				<a href="{{ URL::to('/tag') }}" class="label label-default">{{ $faker->text(10) }}</a>
			</div>
			<div class="started">{{ $faker->randomNumber(1) }} minuten geleden <a href="">{{ $faker->name }}</a> {{ $faker->randomNumber(2) }}</div>
		</div>
	</div>
	@endfor
</div>

@stop
