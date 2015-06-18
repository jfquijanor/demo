<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PaginasController extends Controller {

	public function acerca()
	{
		//$nombre = 'Javier Felipe';
		//return view('paginas/acerca')->with('nombre', $nombre);
		/*return view('paginas.acerca')->with([
			'nombre' => 'Javier',
			'apellido' => 'Quijano',

			]);
		*/
		/*
		$datos = [];
		$datos['nombre'] = 'Javier';
		$datos['apellido'] = 'Quijano';
		return view('paginas/acerca', $datos);
		*/
		/*
		$nombre = 'Javier';
		$apellido = 'Quijano';
		return view('paginas.acerca', compact('nombre', 'apellido'));
		*/

		/*Desde acerca.blade.php	
	
			//@if ($nombre == 'Javier')
				<h1>Me llamo Javier</h1>
			//@else
				<h1>No soy Javier</h1>
			//@endif

			<h1>Soy:{{ $nombre }} {{ $apellido}}</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus quod ad aspernatur neque. Recusandae beatae aut modi veritatis aliquam maiores atque tempore. Explicabo, voluptatum optio. Ullam dicta in praesentium quisquam!</p>

		*/



		$apoyo = ['David', 'Roger', 'Adrian'];
		return view('paginas.acerca', compact('apoyo'));


	}

	public function contacto(){
		return view('contacto');
	}

}
