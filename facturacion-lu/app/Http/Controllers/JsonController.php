<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vendedor;

class JsonController extends Controller
{
    public function index(){
    	$vendedores = Vendedor::all();
    	return view('json.infovendedores', [
    		'vendedores' => $vendedores
    	]);
    }

    public function traevendendor($idvendedor){
    	$datos = Vendedor::where('id', $idvendedor)->first();

    	$persona = [];
    	$datos = [];
    	$resultado = [];

    	$datos = ['edad' => 36, 'altura' => 191, 'pelo' => 'Morocho'];
    	$persona = ['nombre' => 'Lucas', 'apellido' => 'Ramos', 'datos' => $datos];

    	array_push ($resultado, $persona);

    	$datos = ['edad' => 60, 'altura' => 165, 'pelo' => 'Pelado'];
    	$persona = ['nombre' => 'Martin', 'apellido' => 'Valverde', 'datos' => $datos];

    	array_push ($resultado, $persona);

    	//return array('edad' => 25, 'altura' => 191);
    	return $resultado;

    	/*return response()->json([
    		'nombre1' => $datos->nombre,
    		'nombre2' => 'Otro nombre da error',
    		'apellido' => $datos->apellido,
    		'email' => $datos->email,
    		'masdatos' => array('edad' => 25, 'altura' => 191)
    	]);*/

    	/*return response()->json([
    		'primero' => 'Hola que tal',
    		'segundo' => 'Este es el segundo objeto',
    		'tercero' => json([
    							'tercerouno' => 'holis',
    							'tercerodos' => 'chausis'
    						 ])
    	]);*/
    }
}
