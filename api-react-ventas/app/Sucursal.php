<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{
	protected $table = 'sucursales';

	public function vendedores(){
		return $this->hasMany('App\Vendedor');
	}

	public function ventas(){
		return $this->hasMany('App\Venta');
	}
}
