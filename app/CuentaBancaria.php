<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CuentaBancaria extends Model
{
    protected $table = 'cuentabancaria';

	protected $primaryKey = 'CodCuentaBancaria';

	public $timestamps = false;

	public function getNombreBancoAttribute()
    {
        $nombreDeBanco = ['Banco union', 'Banco Solidario', 'Banco numero 1'];
        return $nombreDeBanco[$this->CodBanco];
    }

    public function getTipoDeCuentaAttribute()
    {
        $tipoDeCuenta = ['Cuenta bancaria', 'Cuenta corriente', 'Libretas de ahorro'];
        return $tipoDeCuenta[$this->TipoCuenta];
    }
    public function getTipoDeMonedaAttribute()
    {
        $tipoDeMoneda = ['Pesos', 'Dolares', 'Euros'];
        return $tipoDeMoneda[$this->Moneda];
    }
}
