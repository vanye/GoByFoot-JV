
@extends("layouts.master")

@section('head')
@parent	
<!-- <script type="text/javascript"></script> -->
@stop

@section('content')




{{Form::open(['url'=>'admin'])}}



{{Form::label('email', 'E-Mail', array('class' => 'mon-label'))}}
{{Form::email('email', 'votre email', ['class'=>'form-control'])}}


{{Form::label('password', 'Mot de passe', array('class' => 'mon-label'))}}
{{Form::password('password', '', ['class'=>'form-control'])}}

{{isset($errors)? "<p style='color:red;'>".$errors->first('password')."</p>" : ''}}


{{Form::submit('Connexion', ['class' => "btn btn-default"])}}
{{ Form::close() }}


@stop