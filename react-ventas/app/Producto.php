<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
	protected $table = 'productos';

	public function categoria(){
		return $this->belongsTo('App\Categoria', 'idcategoria');
	}

	public function marca(){
		return $this->belongsTo('App\Marca', 'idmarca');
	}

	public function imagenes(){
		return $this->hasMany('App\ProductosImagenes');
	}
}