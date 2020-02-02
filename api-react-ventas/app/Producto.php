<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'productos';

    public function productosventas(){
		return $this->hasMany('App\ProductoPorVenta');
	}

	public function caracteristicas(){
		return $this->hasMany('App\Caracteristica');
	}

	public function categoria(){
		return $this->belongsTo('App\Categoria', 'idcategoria');
	}

	public function marca(){
		return $this->belongsTo('App\Marca', 'idmarca');
	}
}