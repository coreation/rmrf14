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
	<div class="question">
		<div class="stats">
			<div class="votes">
				<div class="count">0</div>
				<div>votes</div>
			</div>
			<div class="answers">
				<div class="count">0</div>
				<div>answers</div>
			</div>
			<div class="views">
				<div class="count">0</div>
				<div>views</div>
			</div>
		</div>
		<div class="summary">
			<h3><a href="{{ URL::to('/question') }}">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></h3>
			<div class="tags">
				<a href="{{ URL::to('/tag') }}" class="label label-default">taga</a>
				<a href="{{ URL::to('/tag') }}" class="label label-default">tagb</a>
				<a href="{{ URL::to('/tag') }}" class="label label-default">tagc</a>
			</div>
			<div class="started">12 minuten geleden <a href="">Jens Segers</a> 234</div>
		</div>
	</div>
</div>

@stop
