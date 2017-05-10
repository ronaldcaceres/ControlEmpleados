<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaLogResidencia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Log_Residencia', function (Blueprint $table) {
            $table->increments('CodLogResidencia');
            $table->integer('CodTrabajadorPortuario')->unsigned();
            $table->string('ContactoNombre',20);
            $table->string('ContactoTelefono1',50);
            $table->string('ContactoTelefono2',50);
            $table->string('CorreoElectronico',50);
            $table->integer('Departamento');
            $table->integer('Provincia');
            $table->integer('Distrito');
            $table->string('ComentariosExtra',200);
            $table->boolean('Activo');
            $table->integer('UsuarioCreacion')->unsigned();
            $table->integer('UsuarioActualizacion')->unsigned();
            $table->date('FechaCreacion');
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
        Schema::dropIfExists('Log_Residencia');
    }
}
