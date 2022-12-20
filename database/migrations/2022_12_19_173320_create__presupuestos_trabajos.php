<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePresupuestosTrabajos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Presupuestos_trabajos', function (Blueprint $table) {

            $table->increments('id');
            $table->timestamps();
            $table->Integer('numero_presupuesto')->nullable();
            
            //CLIENTE
            $table->Integer('id_empresa')->nullable();
            $table->Integer('id_cliente')->nullable();

            //SOLICITUD
            $table->Integer('id_solicitud_cliente')->nullable();

            //TOTAL
            $table->double('total')->nullable();



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Presupuestos_trabajos');
    }
}
