<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaPerfilPermiso extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perfil_permiso', function (Blueprint $table) {
            $table->integer('perfil_id')->unsigned();
            $table->integer('permiso_id')->unsigned();
            $table->foreign('perfil_id')->references('id')->on('perfiles');
            $table->foreign('permiso_id')->references('id')->on('permisos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('perfil_permiso');
    }
}
