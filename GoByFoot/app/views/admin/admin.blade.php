
@extends("layouts.master")

@section('head')
@parent	
<!-- <script type="text/javascript"></script> -->
@stop

@section('content')


<h2>Accueil administration du site</h2>

<a href="{{url('admPost/create')}}" class="btn btn-info">Ajouter un article</a>
{{$exps->links()}}
<table class="table table-striped">
	<thead>
		<tr>
			<th>Id</th>
			<th>Afficher</th>
			<th>Status</th>
			<th>Titre</th>
			<th>Autheur</th>
			<th>Posté le</th>
			<th>Changer le statut</th>
			<th>Supprimer</th>
		</tr>
	</thead>
	<tbody>
		
		@foreach ($exps as $exp)
		<tr
					@if ($exp->status == "published")
					class="info"
					@else
					class="success"	
					@endif
		>
			<td>
				{{$exp->id}}
			</td>
			<td><a href="{{url('admPost/'.$exp->id)}}">Voir</a></td>
			<td>{{$exp->status}}</td>
			<td>
				<a href="{{url(''.'admPost/'.$exp->id.'/edit')}}" class="btn">{{$exp->title}}</a>
			</td>
			<td>
				{{ $exp->user->username  }}

			</td>
			<td>
				{{date("d-m-Y", strtotime($exp->created_at))}}
			</td>
			<td>
				<a href="{{url('change/'.$exp->id)}}" class="btn">
					@if ($exp->status == "published")
					<button type="button" class="btn btn-warning" >Unpublish</button>
					@else
					<button type="button" class="btn btn-warning">Publish</button>				
					@endif
				</a>
			</td>
			<td>
				{{Form::open(['url'=>'admPost/'.$exp->id, 'method'=>'delete'])}}
				{{Form::submit('Poubelle', ['class' => "btn btn-danger", "onclick"=>"return confirm('Etes-vous sûr de vouloir supprimer cette expérience ?');"])}}
				{{ Form::close() }}
			</td>
		</tr>
		@endforeach

	</tbody>

</table>


@stop