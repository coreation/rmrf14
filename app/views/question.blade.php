@extends('layouts.master')

@section('content')
	<div id="question">
		<div class="row">
			<h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
		</div>
		<div class="row">
			<div class="stats">
				<a href="upvote" class="upvote">upvote</a>
				<span class="votes">1</span>
				<a href="downvote" class="downvote">downvote</a>
			</div>
			<div class="summary">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit Lorem ipsum dolor sit amet, consectetur adipiscing elit
				
			</div>
			<div class="tags">
				<a href="{{ URL::to('/tag') }}" class="label label-default">taga</a>
				<a href="{{ URL::to('/tag') }}" class="label label-default">tagb</a>
				<a href="{{ URL::to('/tag') }}" class="label label-default">tagc</a>
			</div>
			<div class="started">12 minuten geleden <a href="">Jens Segers</a> 234</div>
		</div>
	</div>

	<div id="answers">
		<h4>4 antwoorden</h4>

		<div class="row">
			<div class="stats">
				<a href="upvote" class="upvote">upvote</a>
				<span class="votes">7</span>
				<a href="downvote" class="downvote">downvote</a>
				<span class="answer">beste</span>
			</div>
			<div class="summary">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit Lorem ipsum dolor sit amet, consectetur adipiscing elit
				<div class="started">12 minuten geleden <a href="">Jens Segers</a> 234</div>
			</div>
		</div>
		
		<div class="row">
			<div class="stats">
				<a href="upvote" class="upvote">upvote</a>
				<span class="votes">1</span>
				<a href="downvote" class="downvote">downvote</a>
			</div>
			<div class="summary">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit Lorem ipsum dolor sit amet, consectetur adipiscing elit
				<div class="started">12 minuten geleden <a href="">Jens Segers</a> 234</div>
			</div>
		</div>
		
		<div class="row">
			<div class="stats">
				<a href="upvote" class="upvote">upvote</a>
				<span class="votes">1</span>
				<a href="downvote" class="downvote">downvote</a>
			</div>
			<div class="summary">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit Lorem ipsum dolor sit amet, consectetur adipiscing elit
				<div class="started">12 minuten geleden <a href="">Jens Segers</a> 234</div>
			</div>
		</div>

	</div>
@stop
