<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventario', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->String('Codigo_Objeto_Inventario')->nullable();
            $table->String('Tipo_Objeto_Inventario')->nullable();
            $table->String('Nombre_Objeto_Inventario')->nullable();
            $table->String('NSerie_Objeto_Inventario')->nullable();
            $table->String('Cantidad_Objeto_Inventario')->nullable();
            $table->double('Valor_Objeto_Inventario')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inventario');
    }
}
