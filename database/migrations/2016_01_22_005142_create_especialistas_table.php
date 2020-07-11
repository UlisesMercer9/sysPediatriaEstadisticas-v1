<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEspecialistasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('especialistas', function (Blueprint $table) {
            
            $table->increments('id');
            $table->string('cedula');
            $table->string('nombre');
            $table->string('apellidos');
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->string('especialidad',100);
            $table->string('organizacion',200);
            $table->string('estado',100);
            $table->string('ciudad',100);
            $table->string('localidad',100);
            $table->string('postal');
            $table->rememberToken();
            $table->timestamps();
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('especialistas');
    }
}
