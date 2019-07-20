<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ItemFactura extends Model
{
    protected $table = 'itemsfacturas';

    public function producto(){
    	return $this->belongsTo('App\Producto', 'IdProducto');
    }

    public function factura(){
    	return $this->belongsTo('App\Factura', 'IdFactura');
    }
}
