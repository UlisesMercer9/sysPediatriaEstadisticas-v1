<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInfantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('infantes', function (Blueprint $table) {

            $table->increments('id');
            $table->string('nombre');
            $table->string('apellido');
            $table->integer('edad');
            $table->string('sexo');
            $table->string('estado');
            $table->string('ciudad');
            $table->string('localidad');
            $table->string('postal');
            $table->rememberToken();
            $table->timestamps();
            $table->integer('id_especialista')->unsigned();
            $table->foreign('id_especialista')->references('id')->on('especialistas');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('infantes');
    }
}
