<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTutorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tutors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->integer('telefono');
            $table->string('estado',100);
            $table->string('ciudad',100);
            $table->string('localidad',100);
            $table->string('postal');
            $table->rememberToken();
            $table->timestamps();
            $table->integer('id_especialista')->unsigned();
            $table->foreign('id_especialista')->references('id')->on('especialistas');
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
        Schema::drop('tutors');
    }
}
