@extends('master')

@section ('contenido')

<h1>Detalle de Articulos</h1>
<h2>{{ $articulo->titulo }}</h2>
<h3>{{ $articulo->descripcion}}</h3>
<h4>{{ $articulo->autor}}</h4>

@stop