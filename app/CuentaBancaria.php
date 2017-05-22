<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CuentaBancaria extends Model
{
    protected $table = 'cuentabancaria';

	protected $primaryKey = 'CodCuentaBancaria';

	public $timestamps = false;
}
