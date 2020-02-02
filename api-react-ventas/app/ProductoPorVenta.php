<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductoPorVenta extends Model
{
    protected $table = 'productos_ventas';

    public function producto(){
		return $this->belongsTo('App\Producto', 'idproducto');
	}

	public function venta(){
		return $this->belongsTo('App\Venta', 'idventa');
	}
}
