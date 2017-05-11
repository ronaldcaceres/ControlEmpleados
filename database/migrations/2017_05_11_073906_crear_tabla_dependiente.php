<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaDependiente extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Dependiente', function (Blueprint $table) {
            $table->increments('CodDependiente');
            $table->integer('CodTrabajadorPortuario')->unsigned();
            $table->string('NombreCompleto');
            $table->integer('TipoDependiente');
            $table->date('FechaNacimeinto');
            $table->integer('UsuarioCreacion')->unsigned();
            $table->date('FechaCreacion');
            $table->integer('UsuarioActualizacion')->unsigned();
            $table->date('FechaActualizacion');
            $table->foreign('CodTrabajadorPortuario')->references('CodTrabajadorPortuario')->on('TrabajadorPortuario');
            $table->foreign('UsuarioCreacion')->references('id')->on('users');
            $table->foreign('UsuarioActualizacion')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Dependiente');
    }
}
