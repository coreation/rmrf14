@extends('layouts.master')

@section('content')
	<div class="page-header">
		<h3>{{ $questions[array_rand($questions)] }}</h3>
	</div>

	<div id="question">
		<div class="stats">
			<a href="upvote" class="upvote"><i class="fa fa-caret-up"></i></a>
			<span class="votes">{{ $faker->randomNumber(1) }}</span>
			<a href="downvote" class="downvote"><i class="fa fa-caret-down"></i></a>
		</div>
		<div class="summary">
			{{ $faker->text(600) }}

			<div class="tags">
				<a href="#" class="label label-default">{{ $faker->text(10) }}</a>
				<a href="#" class="label label-default">{{ $faker->text(10) }}</a>
				<a href="#" class="label label-default">{{ $faker->text(10) }}</a>
			</div>
			<div class="started">{{ $faker->randomNumber(1) }} minuten geleden <a href="#">{{ $faker->firstName, ' ', $faker->lastName}}</a> {{ $faker->randomNumber(2) }}</div>
		</div>
	</div>

	<div id="answers">
		<div class="page-header">
			<h4>4 antwoorden</h4>
		</div>

		@for ($i = 0; $i < 4; $i++)
		<div class="answer">
			<div class="stats">
				<a href="upvote" class="upvote"><i class="fa fa-caret-up"></i></a>
				<span class="votes">{{ $faker->randomNumber(1) }}</span>
				<a href="downvote" class="downvote"><i class="fa fa-caret-down"></i></a>
			</div>
			<div class="summary">
				{{ $faker->text }}
				<div class="started">{{ $faker->randomNumber(1) }} minuten geleden <a href="#">{{ $faker->firstName, ' ', $faker->lastName}}</a> {{ $faker->randomNumber(2) }}</div>
			</div>
		</div>
		@endfor

	</div>
	<div id="answer">

	<div class="page-header">
		<h4>Antwoord</h4>
	</div><br>

    <form role="form">
      <div class="form-group">
          <textarea class="form-control"  id="inputBody" placeholder="Antwoord" rows="5"></textarea>
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary">Geef antwoord</button>
      </div>
    </form>

</div>
@stop
