
@extends("layouts.master")

@section('head')
@parent	
<!-- <script type="text/javascript"></script> -->
@stop

@section('content')

<div class="experience">

	<h2>{{$exp->title}}</h2>

	<h3>Description</h3>
	<p>{{$exp->description}}</p>
	
	<p>Google map</p>

	<h3>Auteur</h3>
    <p> {{$exp->user->username}}</p>

	<h3>Commentaire</h3>
    <p>{{$exp->comment}}</p>
</div>

@stop