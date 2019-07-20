<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    protected $table = 'facturas';

    public function itemsfacturas(){
    	return $this->hasMany('App\ItemFactura');
    }

    public function cliente(){
    	return $this->belongsTo('App\Cliente', 'IdCliente');
    }

    public function vendedor(){
    	return $this->belongsTo('App\Vendedor', 'IdVendedor');
    }
}
