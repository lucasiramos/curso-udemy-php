<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    function hello(){
    	$persona = [];
    	$datos = [];
    	$resultado = [];

    	$datos = ['edad' => 77106, 'altura' => 32204, 'pelo' => 'Alpataco 129'];
    	$persona = ['nombre' => 'Hola', 'apellido' => 'Que tal', 'datos' => $datos];

    	array_push ($resultado, $persona);

    	$datos = ['edad' => 60, 'altura' => 165, 'pelo' => 'Pelado'];
    	$persona = ['nombre' => 'Martin', 'apellido' => 'Valverde', 'datos' => $datos];

    	array_push ($resultado, $persona);

    	//return array('edad' => 25, 'altura' => 191);
    	return $resultado;
    }
}
