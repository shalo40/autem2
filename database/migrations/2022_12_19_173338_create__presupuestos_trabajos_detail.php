<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePresupuestosTrabajosDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Presupuestos_trabajos_detail', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->softDeletes();

            //FK
            $table->Integer('id_presupuesto')->nullable();
            $table->Integer('id_procedimiento')->nullable();
            
            //DETALLE
            $table->double('precio')->nullable();
            $table->Integer('cantidad')->default(0);
            $table->double('sub_total')->nullable();

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Presupuestos_trabajos_detail');
    }
}
