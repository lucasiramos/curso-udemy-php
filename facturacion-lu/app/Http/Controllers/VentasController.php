<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Factura;
use App\Producto;
use App\Cliente;
use App\ItemFactura;
use Illuminate\Support\Facades\DB;

class VentasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
    	$user = \Auth::user();
        $facturas = Factura::where('IdVendedor', $user->id)->get();

    	return view('ventas.ventas', [
    		'facturas' => $facturas
    	]);
    }

    public function nueva(){
        $productos = Producto::all();
        $clientes = Cliente::orderBy('Nombre')->get();

        return view('ventas.nueva', [
            'productos' => $productos,
            'clientes'  => $clientes
        ]);
    }

    public function grabaencabezado(Request $request){
        date_default_timezone_set('America/Argentina/Buenos_Aires');

        $factura = new Factura();

        $user = \Auth::user();

        $factura->Fecha = date("Y-m-d h:i:s");
        $factura->IdVendedor = $user->id;
        $factura->IdCliente = $request->input('cliente');
        $factura->Total = 0;

        $factura->save();   

        $ultimafactura = Factura::orderBy('Id','desc')->first();

        return redirect()->route('ventas.items', ['idfactura' => $ultimafactura->Id]);
    }

    public function items($idfactura){
        $productos = Producto::orderBy('Nombre')->get();
        $items = ItemFactura::where('IdFactura', $idfactura)->orderBy('Id')->get();

        return view('ventas.items', [
            'productos' => $productos,
            'items' => $items,
            'idfactura' => $idfactura
        ]);
    }

    public function grabaitem(Request $request){
        $validate = $this->validate($request, [
            'cantidad'  => 'required'
        ]);

        $producto = Producto::find($request->producto);
        $total = $request->cantidad * $producto->Precio;

        $itemfactura = new ItemFactura();

        $itemfactura->IdFactura = $request->idfactura;
        $itemfactura->IdProducto = $request->producto;
        $itemfactura->Cantidad = $request->cantidad;
        $itemfactura->Total = $total;

        $itemfactura->save();

        return redirect()->route('ventas.items', ['idfactura' => $request->idfactura])
                         ->with([
                                'mensaje' => 'Item agregado correctamente'
                             ]);
    }

    public function cerrarfactura(Request $request){
        $factura = DB::table('Facturas')->where('id', $request->idfactura)
                                        ->update(array(
                                            'Total' => $request->total
                                        ));

        return redirect()->route('ventas')
                         ->with([
                                'mensaje' => 'Factura cerrada correctamente'
                             ]);   
    }
}
