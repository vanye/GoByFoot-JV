
@extends("layouts.master")

@section('head')
@parent	
<!-- <script type="text/javascript"></script> -->
@stop

@section('content')

<div class="post">

	



{{Form::open(['url'=>'admPost/', "files"=>true])}}

{{Form::label('titre', 'Titre', array('class' => 'mon-label'))}}
{{Form::text('titre', "", ['class'=>'form-control'])}}

{{Form::label('description', 'Description', array('class' => 'mon-label'))}}
{{Form::textarea('description', '', ['class'=>'form-control ckeditor'])}}

{{Form::label('type', 'Type de transport', array('class' => 'mon-label'))}}
{{Form::text('type', '', ['class'=>'form-control'])}}

{{Form::label('comment', 'Commentaire', array('class' => 'mon-label'))}}
{{Form::textarea('comment', '', ['class'=>'form-control ckeditor'])}}

<br>
<p>Les coordonnées des points sont à renseigné dans le format suivant LATITUDE_LONGITUDE     
(ex : "1.2_-2.5")</p>

{{Form::label('start', 'Point de départ', array('class' => 'mon-label'))}}
{{Form::text('start', '', ['class'=>'form-control'])}}

{{Form::label('arrival', 'Point d\'arrivée', array('class' => 'mon-label'))}}
{{Form::text('arrival', '', ['class'=>'form-control'])}}




{{Form::file('photo')}}

{{Form::submit('Ajouter', ['class' => "btn btn-default"])}}
{{ Form::close() }}

</div>

@stop