
@extends("layouts.master")

@section('head')
@parent	
<!-- <script type="text/javascript"></script> -->
@stop

@section('content')

{{--
{{$data->links()}}
	--}}



<div class="experience">

<h2>Dernière expérience</h2>

<h3>{{$last_exp->title}}</h3>

<div><label>Commentaire : </label>{{$last_exp->comment}}</div>
<div><label>Type de trajet : </label>{{$last_exp->type}}</div>
<div><label>Description : </label>{{$last_exp->description}}</div>
<div><label>Taux d'émission de CO2 : </label>{{$last_exp->ges}}</div>


</div>


<div class="map">



{{$map}}
<?php var_dump($map); ?>


</p>

</div>

@stop