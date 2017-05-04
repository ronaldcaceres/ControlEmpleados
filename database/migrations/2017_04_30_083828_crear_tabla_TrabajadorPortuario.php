<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaTrabajadorPortuario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TrabajadorPortuario', function (Blueprint $table) {
            $table->increments('CodTrabajadorPortuario');
            $table->string('ApellidoPaterno',50);
            $table->string('ApellidoMaterno',50);
            $table->string('Nombre',50);
            $table->string('Tax',20);
            $table->string('ClaseBrevete',10)->nullable();
            $table->string('EstadoCivil',10);
            $table->date('FechaNacimiento');
            $table->date('FechaRevalidacionBrevete')->nullable();
            $table->boolean('IndicadorTieneBrevete');
            $table->string('NroCelular',50);
            $table->integer('TipoDocIdentidad');
            $table->string('NroDocIdentidad',20);
            $table->string('NroLicenciaBrevete',20)->nullable();
            $table->string('TelefonoAdicional1',20)->nullable();
            $table->string('TelefonoAdicional2',20)->nullable();
            $table->string('Sexo',10);
            $table->string('TipoRegimenPensionar',50);
            $table->boolean('Activo');
            $table->integer('UsuarioCreacion');
            $table->integer('UsuarioActualizacion');
            $table->date('FechaCreacion');
            $table->date('FechaActualizacion');
;
        });    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {        
        Schema::dropIfExists('TrabajadorPortuario');
    }
}
