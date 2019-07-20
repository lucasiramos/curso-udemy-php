<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Factura;
use App\Vendedor;
use App\Producto;

class FacturasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function nueva(Request $request){
    	date_default_timezone_set('America/Argentina/Buenos_Aires');

        $factura = new Factura();

        $user = \Auth::user();

        $factura->Fecha = date("Y-m-d h:i:s");
        $factura->IdVendedor = $user->id;
        $factura->IdCliente = $request->input('cliente');
        $factura->Total = 0;   

        //$factura->save();

        $ultimafactura = Factura::orderBy('Id','desc')->first();
        $productos = Producto::orderBy('Nombre')->get();
        //$ultimafactura = Factura::where('Id', '=', 4)->first();

        return redirect()->route('facturas.agregaritems')->with([
            'mensaje' => 'Cabecera creada correctamente',
            'ultimafactura' => $ultimafactura,
            'productos' => $productos
        ]);

        /*$xCant = 1;

    	$arraycito = array_values($request->input());
    	//var_dump($arraycito[5]);

    	while($xCant < count($request->input())){
    		//var_dump($request->input());
    		echo $arraycito[$xCant] . '<br/>';
    		$xCant = $xCant + 2;
    	}*/

    	//var_dump($request->input('producto2'));

    	/*foreach($request->input() as $item){
    		var_dump($item);
    		echo '<hr/>';
    	}*/

    	/*var_dump($request->input('1'));
    	echo '<hr/>';
    	echo count(collect($request));
    	echo '<hr/>';
    	var_dump($request);*/
    	die();
    }

    public function grabaritem(){

    }
}
