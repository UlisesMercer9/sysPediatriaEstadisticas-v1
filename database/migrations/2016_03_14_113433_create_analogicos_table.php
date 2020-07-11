<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnalogicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('analogicos', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fecha_aplicacion_test');
            $table->string('organizacion_perceptual');
            $table->string('habilidad_de_razonamiento');
            $table->string('atencion_a_detalles');
            $table->string('concertacion');
            $table->string('vision');
            $table->string('persistencia');
            $table->string('puntuacion_escalar'); 
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
        Schema::drop('analogicos');
    }
}
