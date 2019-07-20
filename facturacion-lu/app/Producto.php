<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'productos';

    public function itemsfacturas(){
    	return $this->hasMany('App\ItemFactura');
    }
}
