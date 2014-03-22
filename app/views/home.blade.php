@extends('layouts.master')

@section('content')

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
			<h3><a href="/question">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></h3>
			<div class="tags">
				<a href="/tag/" class="label label-default">taga</a>
				<a href="/tag/" class="label label-default">tagb</a>
				<a href="/tag/" class="label label-default">tagc</a>
			</div>
			<div class="started">12 minuten geleden <a href="">Jens Segers</a> 234</div>
		</div>
	</div>
</div>

@stop
