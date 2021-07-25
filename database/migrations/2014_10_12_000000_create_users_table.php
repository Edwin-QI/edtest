<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();// integer, unsigned, increment
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->unsignedBigInteger('idRol');
            $table->foreign('idRol')->references('idRol')->on('rols');
            $table->rememberToken();
            $table->timestamps();
            //rol datos
            $table->id();
            $table->string('cedula');
            $table->date('fecha_nac');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('direccion');
            $table->string('telefono');
            $table->string('departamento');
            $table->string('municipio');
            $table->string('email');
            /*$table->unsignedBigInteger('idRol');
            $table->foreign('idRol')->references('idRol')->on('rols');*/
            $table->timestamps();
        });
        //rol rols
        Schema::create('rols', function (Blueprint $table) {
            $table->id('idRol');
            $table->string('Usuario');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
