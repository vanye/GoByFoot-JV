
@extends("layouts.master")

@section('head')
@parent	
<!-- <script type="text/javascript"></script> -->
@stop

@section('content')

<h2>Toutes les expériences</h2>

{{$exps->links()}}

<div class="post">

	@foreach ($exps as $exp)

	<h2><a href="{{url('experience/'.$exp->id)}}">{{$exp->title}}</a></h2>
	<img src="{{url('assets/images/'.$exp->link_thumbnail)}}" alt="{{$exp->link_thumbnail}}">
	<p>
		{{$exp->excerpt}}
	</p>
	<p>
	<!-- Auteur  :<a href="{{url('user/'.$exp->user->id)}}">{{$exp->user->username}}</a> -->
	Auteur  : {{$exp->user->username}}
	</p>

	<p>
Créé le : {{date("d/m/Y", strtotime($exp->created_at))}}
	</p>


	@endforeach

</div>

@stop