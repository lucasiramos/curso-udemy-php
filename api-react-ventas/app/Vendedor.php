<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendedor extends Model
{
    protected $table = 'vendedores';

    public function ventas(){
		return $this->hasMany('App\Venta');
	}

	public function usuario(){
		return $this->belongsTo('App\Usuario', 'idusuario');
	}

	public function sucursal(){
		return $this->belongsTo('App\Sucursal', 'idsucursal');
	}
}
