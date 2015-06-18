@extends('master')

@section('contenido')

<h1>Titulo de Pagina</h1>
@if (count($apoyo))
	<h1>Personas que contribuyen a Laravel</h1>
	<ul>
		@foreach ($apoyo as $persona)
			<li>{{ $persona }}</li>
		@endforeach
	</ul>
@endif

@stop