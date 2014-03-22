@extends('layouts.master')

@section('content')
	<div class="page-header">
		<h3>{{ $questions[$faker->randomNumber(0,3)] }}</h3>
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
				<a href="{{ URL::to('/tag') }}" class="label label-default">{{ $faker->text(10) }}</a>
				<a href="{{ URL::to('/tag') }}" class="label label-default">{{ $faker->text(10) }}</a>
				<a href="{{ URL::to('/tag') }}" class="label label-default">{{ $faker->text(10) }}</a>
			</div>
			<div class="started">{{ $faker->randomNumber(1) }} minuten geleden <a href="">{{ $faker->name }}</a> {{ $faker->randomNumber(2) }}</div>
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
				<div class="started">{{ $faker->randomNumber(1) }} minuten geleden <a href="">{{ $faker->name }}</a> {{ $faker->randomNumber(2) }}</div>
			</div>
		</div>
		@endfor

	</div>
	<div id="answer">
    <form class="form-horizontal" role="form">
      <div class="form-group">
        <label for="inputBody" class="col-sm-2 control-label">Antwoord</label>
        <div class="col-sm-10">
          <textarea class="form-control"  id="inputBody" placeholder="Antwoord" rows="5"></textarea>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-default">Geef antwoord</button>
        </div>
      </div>
    </form>

</div>
@stop
