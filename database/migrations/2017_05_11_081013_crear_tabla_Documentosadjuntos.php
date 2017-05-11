<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaDocumentosadjuntos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('DocumentosAdjuntos', function (Blueprint $table) {
            $table->increments('CodDocumentoAdjunto');
            $table->integer('CodRequisito');
            $table->integer('Estado');
            $table->string('NombreArchivo');
            $table->integer('UsuarioCreacion')->unsigned();
            $table->date('FechaCreacion');
            $table->integer('UsuarioActualizacion')->unsigned();
            $table->date('FechaActualizacion');
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
        Schema::dropIfExists('DocumentosAdjuntos');
    }
}
