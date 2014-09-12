
@extends("layouts.master")

@section('head')
@parent	
<!-- <script type="text/javascript"></script> -->
@stop

@section('content')

<div class="post">







	{{Form::open(['url'=>'admPost/'.$exp->id, 'method'=>'put', "files"=>true])}}

{{Form::label('titre', 'Titre', array('class' => 'mon-label'))}}
{{Form::text('titre', $exp->title, ['class'=>'form-control'])}}

{{Form::label('description', 'Description', array('class' => 'mon-label'))}}
{{Form::textarea('description', $exp->description, ['class'=>'form-control ckeditor'])}}

{{Form::label('type', 'Type de transport', array('class' => 'mon-label'))}}
{{Form::text('type', $exp->type, ['class'=>'form-control'])}}

{{Form::label('comment', 'Commentaire', array('class' => 'mon-label'))}}
{{Form::textarea('comment', $exp->comment, ['class'=>'form-control ckeditor'])}}

<br>
<p>Les coordonnées des points sont à renseigné dans le format suivant LATITUDE_LONGITUDE     
(ex : "1.2_-2.5")</p>

{{Form::label('start', 'Point de départ', array('class' => 'mon-label'))}}
{{Form::text('start', $exp->start, ['class'=>'form-control'])}}

{{Form::label('arrival', 'Point d\'arrivée', array('class' => 'mon-label'))}}
{{Form::text('arrival', $exp->arrival, ['class'=>'form-control'])}}



{{Form::hidden('post_id', $exp->id)}}

{{Form::file('photo')}}

	{{Form::submit('Enregistrer les modifications', ['class' => "btn btn-default"])}}
{{ Form::close() }}

</div>

@stop