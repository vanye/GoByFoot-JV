
@extends("layouts.master")

@section('head')
@parent	
<!-- <script type="text/javascript"></script> -->
@stop

@section('content')

<div class="post">

	<h2>{{$exp->title}}</h2>

	<h3>Description</h3>
	<p>{{$exp->description}}</p>
	
	<p>Google map</p>

	<h3>Auteur</h3>
	<p> {{$exp->user->username}}</p>

	<h3>Commentaire</h3>
	<p>{{$exp->comment}}</p>

	<h3>Point de départ</h3>
	<p>{{$exp->start}}</p>

	<h3>Point d'arrivée</h3>
	<p>{{$exp->arrival}}</p>



	<img src="{{url('assets/images/'.$exp->link_thumbnail)}}" alt="{{$exp->link_thumbnail}}">

</div>


@stop