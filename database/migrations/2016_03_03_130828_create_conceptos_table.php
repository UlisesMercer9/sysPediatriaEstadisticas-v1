<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConceptosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conceptos', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fecha_aplicacion_test');
            $table->string('lugar_de_aplicaion');
            $table->string('numero_de_item');
            $table->string('tiempo_inicio');
            $table->string('respuesta_fila_1');
            $table->string('respuesta_fila_2');
            $table->string('tiempo_total');
            $table->string('puntuacion');  
            $table->timestamps();
            $table->integer('id_infante')->unsigned();
            $table->foreign('id_infante')->references('id')->on('infantes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('conceptos');
    }
}
