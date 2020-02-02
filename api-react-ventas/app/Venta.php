<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
	protected $table = 'ventas';

	public function productosporventa(){
		return $this->hasMany('App\ProductoPorVenta');
	}

	public function vendedor(){
		return $this->belongsTo('App\Vendedor', 'idvendedor');
	}

	public function cliente(){
		return $this->belongsTo('App\Cliente', 'idcliente');
	}

	public function sucursal(){
		return $this->belongsTo('App\Sucursal', 'idsucursal');
	}
}
