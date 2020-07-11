<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCubosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cubos', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fecha_aplicacion_test');
            $table->time('tiempo_de_inicio');
            $table->integer('puntaje_total');
            $table->string('numero_de_item_1');
            $table->time('tiempo_limite_1');
            $table->integer('numero_de_intentos_1');
            $table->time('tiempo_de_ejecucion_1');
            $table->string('diseño_correcto_1');
            $table->integer('puntaje_1');
            $table->integer('numero_de_rotaciones_1');
            $table->string('numero_de_item_2');
            $table->time('tiempo_limite_2');
            $table->integer('numero_de_intentos_2');
            $table->time('tiempo_de_ejecucion_2');
            $table->string('diseño_correcto_2');
            $table->integer('puntaje_2');
            $table->integer('numero_de_rotaciones_2');
            $table->string('numero_de_item_3');
            $table->time('tiempo_limite_3');
            $table->integer('numero_de_intentos_3');
            $table->time('tiempo_de_ejecucion_3');
            $table->string('diseño_correcto_3');
            $table->integer('puntaje_3');
            $table->integer('numero_de_rotaciones_3');
            $table->string('numero_de_item_4');
            $table->time('tiempo_limite_4');
            $table->integer('numero_de_intentos_4');
            $table->time('tiempo_de_ejecucion_4');
            $table->string('diseño_correcto_4');
            $table->integer('puntaje_4');
            $table->integer('numero_de_rotaciones_4');
            $table->string('numero_de_item_5');
            $table->time('tiempo_limite_5');
            $table->integer('numero_de_intentos_5');
            $table->time('tiempo_de_ejecucion_5');
            $table->string('diseño_correcto_5');
            $table->integer('puntaje_5');
            $table->integer('numero_de_rotaciones_5');
            $table->string('numero_de_item_6');
            $table->time('tiempo_limite_6');
            $table->integer('numero_de_intentos_6');
            $table->time('tiempo_de_ejecucion_6');
            $table->string('diseño_correcto_6');
            $table->integer('puntaje_6');
            $table->integer('numero_de_rotaciones_6');
            $table->string('numero_de_item_7');
            $table->time('tiempo_limite_7');
            $table->integer('numero_de_intentos_7');
            $table->time('tiempo_de_ejecucion_7');
            $table->string('diseño_correcto_7');
            $table->integer('puntaje_7');
            $table->integer('numero_de_rotaciones_7');
            $table->string('numero_de_item_8');
            $table->time('tiempo_limite_8');
            $table->integer('numero_de_intentos_8');
            $table->time('tiempo_de_ejecucion_8');
            $table->string('diseño_correcto_8');
            $table->integer('puntaje_8');
            $table->integer('numero_de_rotaciones_8');
            $table->string('numero_de_item_9');
            $table->time('tiempo_limite_9');
            $table->integer('numero_de_intentos_9');
            $table->time('tiempo_de_ejecucion_9');
            $table->string('diseño_correcto_9');
            $table->integer('puntaje_9');
            $table->integer('numero_de_rotaciones_9');
            $table->string('numero_de_item_10');
            $table->time('tiempo_limite_10');
            $table->integer('numero_de_intentos_10');
            $table->time('tiempo_de_ejecucion_10');
            $table->string('diseño_correcto_10');
            $table->integer('puntaje_10');
            $table->integer('numero_de_rotaciones_10');
            $table->string('numero_de_item_11');
            $table->time('tiempo_limite_11');
            $table->integer('numero_de_intentos_11');
            $table->time('tiempo_de_ejecucion_11');
            $table->string('diseño_correcto_11');
            $table->integer('puntaje_11');
            $table->integer('numero_de_rotaciones_11');
            $table->string('numero_de_item_12');
            $table->time('tiempo_limite_12');
            $table->integer('numero_de_intentos_12');
            $table->time('tiempo_de_ejecucion_12');
            $table->string('diseño_correcto_12');
            $table->integer('puntaje_12');
            $table->integer('numero_de_rotaciones_12');
            $table->string('numero_de_item_13');
            $table->time('tiempo_limite_13');
            $table->integer('numero_de_intentos_13');
            $table->time('tiempo_de_ejecucion_13');
            $table->string('diseño_correcto_13');
            $table->integer('puntaje_13');
            $table->integer('numero_de_rotaciones_13');
            $table->string('numero_de_item_14');
            $table->time('tiempo_limite_14');
            $table->integer('numero_de_intentos_14');
            $table->time('tiempo_de_ejecucion_14');
            $table->string('diseño_correcto_14');
            $table->integer('puntaje_14');
            $table->integer('numero_de_rotaciones_14');
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
        Schema::drop('cubos');
    }
}
