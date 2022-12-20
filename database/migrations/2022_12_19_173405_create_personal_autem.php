<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalAutem extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_autem', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->String('Tipo_Personal')->nullable();
            $table->String('Tipo_Contrato_Personal')->nullable();
            $table->String('Cargo_Personal')->nullable();
            $table->String('Rut_Personal')->nullable();
            $table->String('Nombre_Personal')->nullable();
            $table->String('Direccion_Personal')->nullable();
            $table->String('Telefono_Personal')->nullable();
            $table->String('Correo_Personal')->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personal_autem');
    }
}
