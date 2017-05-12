<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LogResidencia extends Model
{
    protected $table = 'log_residencia';

    protected $primaryKey = 'CodLogResidencia';

    public $timestamps = false;

    public function trabajadorPortuario() {
    	return $this->belonsTo(TrabajadorPortuario::class,'CodTrabajadorPortuario','CodTrabajadorPortuario');
    }
}
