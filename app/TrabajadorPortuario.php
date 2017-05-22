<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TrabajadorPortuario extends Model
{
	protected $table = 'TrabajadorPortuario';

	protected $primaryKey = 'CodTrabajadorPortuario';

	public $timestamps = false;

	public function residencia() {
	    return $this->hasMany(LogResidencia::class,'CodTrabajadorPortuario', 'CodTrabajadorPortuario');
    }

    public function dependientes() { 
    	return $this->hasMany(Dependiente::class, 'CodTrabajadorPortuario', 'CodTrabajadorPortuario');
    }

    public function cuentas() {
    	return $this->hasmany(CuentaBancaria::class, 'CodTrabajadorPortuario', 'CodTrabajadorPortuario');
    }
}
