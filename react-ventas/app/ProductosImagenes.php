<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductosImagenes extends Model
{
	protected $table = 'productos_imagenes';

	public function producto(){
		return $this->belongsTo('App\Producto');
	}
}
