
@extends("layouts.master")

@section('head')
@parent	
<!-- <script type="text/javascript"></script> -->
@stop

@section('content')

<div class="experience">

<h1>Tout les articles de {{$users->username}} </h1>


	@foreach ($users->experiences as $experience)

	<h2>{{$experience->title}}</h2>
	<p>
		{{$experience->description}}
	</p>
	@endforeach



</div>

@stop