<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TrabajadorPortuario extends Model
{
	protected $table = 'TrabajadorPortuario';

	protected $primaryKey = 'CodCuentaBancaria';

	public $timestamps = false;

	public function residencia() {
	    return $this->hasMany(LogResidencia::class,'CodTrabajadorPortuario','CodTrabajadorPortuario');
    }

}
