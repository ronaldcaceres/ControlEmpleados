<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dependiente extends Model
{
    protected $table = 'dependiente';

	protected $primaryKey = 'CodDependiente';

	public $timestamps = false;

	public function trabajador_portuario() {
		return $this->belongsTo(TrabajadorPortuario::class, 'CodTrabajadorPortuario', 'CodTrabajadorPortuario');
	}
}
