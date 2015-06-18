<?php

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('acerca', 'PaginasController@acerca');
Route::get('contacto', 'PaginasController@contacto');
Route::resource('articulos', 'ArticulosController');

/*
Route::get('articulos', 'ArticulosController@index');
Route::get('articulos/crear', 'ArticulosController@create');
Route::get('articulos/{id}', 'ArticulosController@show');
Route::post('articulos', 'ArticulosController@store');
Route::post('articulos/{id}/edit', 'ArticulosController@edit');
*/

/*
Route::get('articulos', function(){
	$articulos = App\Articulos::all();
	return $articulos;
});

Route::get('articulos/crear', function(){
	$articulo = new App\Articulos;
	$articulo -> titulo = 'Noticia 3';
	$articulo -> descripcion = 'Descripcion del articulo';
	$articulo -> autor = 'Jose Gabriel';
	$articulo -> save();
});

Route::get('articulos/editar', function(){
	$articulo = App\Articulos::find(2);
	$articulo -> titulo = 'Noticia 2 Modificada';
	$articulo -> descripcion = 'Descripcion del articulo modificado';
	$articulo -> autor = 'Jose Gabriel';
	$articulo -> save();
});

Route::get('articulos/borrar', function(){
	$articulo = App\Articulos::find(3);
	$articulo -> delete();
});

*/