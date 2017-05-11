<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaCuentaBancaria extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('CuentaBancaria', function (Blueprint $table) {
            $table->increments('CodCuentaBancaria');
            $table->integer('CodTrabajadorPortuario')->unsigned();
            $table->integer('CodBanco');
            $table->string('NroCuenta',50);
            $table->integer('TipoCuenta');
            $table->integer('Moneda');
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
        Schema::dropIfExists('CuentaBancaria');
    }
}
