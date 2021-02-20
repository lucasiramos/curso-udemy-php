<?php
namespace App\Http\Controllers\Pruebas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use PDF;
use Faker\Factory as Faker;

class PruebasController extends Controller
{
	public function crearUsuario(){
		// ESTO FUNCA! Sirve para crear un usuario sin el RegisterController
		
		$fecha = date('dmYHis');

		echo 'Ahora son las: ' . $fecha;

		/* User::create([
			'name' => 'Nombre ' . $fecha,
			'email' => 'email' . $fecha . '@gmail.com',
			'password' => Hash::make($fecha . $fecha),
			'descripcion' => 'Una descripción: ' . $fecha,
			'admin' => 0,
		]); */

		User::create([
			'name' => 'Jorge Cortazar',
			'email' => 'jorge@gmail.com',
			'password' => Hash::make('jorge'),
			'descripcion' => 'Si... de INTA',
			'admin' => '0',
		]);

		echo '<br><br>Usuario creado';
	}

	public function adminlte(){
		return view('admin.prueba');
	}

	public function pdf(){
		$faker = Faker::create();

		$clientes = [];

		for($i=1; $i <= 20; $i++){
			$cliente['id'] = $i;
			$cliente['nombre'] = $faker->name;
			$cliente['direccion'] = $faker->address;
			$cliente['compania'] = $faker->company;

			array_push ($clientes, $cliente);
		}

		$data = [
          'title' => 'First PDF for Medium',
          'heading' => 'Hello from 99Points.info',
          'content' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged',
          'clientes' => $clientes
        ];

        $pdf = PDF::loadView('PDFs/prueba', $data);

        return $pdf->download('olis.pdf');
	}
}
