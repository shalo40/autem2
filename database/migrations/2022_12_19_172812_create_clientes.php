<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->String('Tipo_Cliente')->nullable();

            //Empresas
            $table->String('Nombre_Empresa')->nullable();
            $table->String('Rut_Empresa')->nullable();
            $table->String('Contacto_Empresa')->nullable();
            $table->String('Direccion_Empresa')->nullable();
            $table->String('Correo_Empresa')->nullable();
            $table->String('Telefono1_Empresa')->nullable();
            $table->String('Telefono2_Empresa')->nullable();
            $table->String('Ciudad_Empresa')->nullable();

            //Personas Naturales
            $table->String('Rut_Cliente')->nullable();
            $table->String('Nombre_Cliente')->nullable();
            $table->String('Direccion_Cliente')->nullable();
            $table->String('Correo_Cliente')->nullable();
            $table->String('Telefono1_Cliente')->nullable();
            $table->String('Telefono2_Cliente')->nullable();
            $table->String('Ciudad_Cliente')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
