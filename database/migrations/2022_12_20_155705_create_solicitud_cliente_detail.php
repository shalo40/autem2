<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSolicitudClienteDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitud_cliente_detail', function (Blueprint $table) {
            
            $table->increments('id');
            $table->timestamps();
            $table->softDeletes();

            //FK
            $table->Integer('id_Solicitud_Cliente')->nullable();
            

            //SOLICITUD
            $table->String('Tipo_Solicitud')->nullable();
            $table->String('Lugar_Origen_Solicitud')->nullable();
            $table->String('Lugar_Entrega_Solicitud')->nullable();
            $table->String('Fecha_Solicitud')->nullable();
            $table->String('Hora_Inicio_Solicitud')->nullable();
            $table->String('Hora_Termino_Solicitud')->nullable();

            //CARGA
            $table->String('Tipo_Carga_Solicitud')->nullable();
            $table->Integer('TamañoA_Carga_Solicitud')->nullable();
            $table->Integer('TamañoB_Carga_Solicitud')->nullable();
            $table->Integer('TamañoC_Carga_Solicitud')->nullable();
            $table->Integer('Peso_Carga_Solicitud')->nullable();
            $table->Integer('Litros_Carga_Solicitud')->nullable();
            $table->Integer('Cantidad_Bultos_Carga_Solicitud')->nullable();

            //$table->Integer('Foto_Carga_Solicitud')->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('solicitud_cliente_detail');
    }
}
