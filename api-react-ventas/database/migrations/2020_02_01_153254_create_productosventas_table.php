<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosventasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos_ventas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idventa');
            $table->integer('idproducto');
            $table->integer('cantidad');
            $table->float('precio', 8, 2);
            $table->float('total', 10, 2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('productos_ventas', function (Blueprint $table) {
            //
        });
    }
}
