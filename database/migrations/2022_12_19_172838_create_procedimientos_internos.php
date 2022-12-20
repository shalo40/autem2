<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProcedimientosInternos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('procedimientos_internos', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->String('Tipo_Proced')->nullable();
            $table->String('Cod_Proced')->nullable();
            $table->String('Nombre_Proced')->nullable();
            $table->String('Descipcion_Proced')->nullable();
            $table->Double('Valor_Proced')->nullable();
            $table->String('Tiempo_Proced')->nullable();
            $table->String('Recursos_Proced')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('procedimientos_internos');
    }
}
