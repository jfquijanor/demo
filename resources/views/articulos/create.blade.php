@extends('master')

@section ('contenido')

<h1>Crear Artículo</h1>

{!! Form::open(['url' => 'articulos']) !!}

<div class="form-group">
	{!! Form::label('titulo', 'Titulo:') !!}
	{!! Form::text('titulo', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('descripcion', 'Descripcion:') !!}
	{!! Form::textarea('descripcion', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('autor', 'Autor:') !!}
	{!! Form::text('autor', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::submit('Agregar Artículo',['class' => 'btn btn-primary form-control']) !!}
</div>

{!! Form::close() !!}

@if ($errors->any())
		<ul class="alert alert-damage">
			@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
@endif

@stop