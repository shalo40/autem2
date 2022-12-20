<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSolicitudCliente extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitud_cliente', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->Integer('numero_solicitud')->nullable();
            $table->String('tipo_solicitud')->nullable();

             //CLIENTE
             $table->Integer('id_empresa')->nullable();
             $table->Integer('id_cliente')->nullable();

            $table->String('Estado_Solicitud')->nullable();
            

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('solicitud_cliente');
    }
}
