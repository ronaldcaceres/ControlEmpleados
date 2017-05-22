<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaTrabajadorEspecialidad extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TrabajadorEspecialidad', function (Blueprint $table) {
            $table->increments('CodSancionTrabajador');
            $table->integer('CodTrabajadorPortuario')->unsigned();
            $table->integer('CodEspecialidad');
            $table->integer('CodTipoCarga');
            $table->integer('prioridad');
            $table->integer('UsuarioCreacion')->unsigned();
            $table->date('FechaCreacion');
            $table->integer('UsuarioActualizacion')->unsigned();
            $table->date('FechaActualizacion');
            $table->foreign('UsuarioCreacion')->references('id')->on('users');
            $table->foreign('UsuarioActualizacion')->references('id')->on('users');
            $table->foreign('CodTrabajadorPortuario')->references('CodTrabajadorPortuario')->on('TrabajadorPortuario');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('TrabajadorEspecialidad');
    }
}
