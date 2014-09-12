<html>
<head>
	<meta charset="">

	<title>{{$title or "GoByFoot"}}</title>

 <!--    <link rel="stylesheet" type="text/css" href="{{url('assets/css/bootstrap.min.css')}}"></link>
 
 <script src="{{url('assets/js/bootstrap.min.js')}}"></script> -->



 {{HTML::style('assets/css/bootstrap.min.css')}}
 {{HTML::style('assets/css/style.css')}}
 {{HTML::script('assets/js/bootstrap.min.js')}}

 {{HTML::script('assets/js/ckeditor/ckeditor.js')}}

</head>
<body >


	
	<h1><a href="{{url()}}">GoByFoot</a></h1>

	<div class="container navigation">
		<div class="row navigation">



			<div class="navbar-header">
				<h1><a href="{{url()}}">GoByFoot</a></h1>@if (Auth::check())
			</div>




			<nav class="navbar navbar-default" role="navigation">
				<ul class="list-inline">
					<li><a href="{{url()}}">Home</a></li>
					<li><a href="{{url('presentation')}}">Présentation</a></li>
					<li><a href="{{url('experiences')}}">Expériences</a></li>
					@if (Auth::check())
					<li><a href="{{url('admPost')}}"><span class="glyphicon glyphicon-home"></span>Dashboard</a></li>
					<li><a href="{{url('logout')}}">Déconnexion</a></li>
					@else
					<li><a href="{{url('login')}}">Connexion</a></li>
					@endif
				</ul>
			</nav>
			<ol class="breadcrumb">
				<!-- // breadcrumb -->                            
				@section('breadcrumbs')
				@show

			</ol>
		</div>


	</div><!-- navigation -->
	