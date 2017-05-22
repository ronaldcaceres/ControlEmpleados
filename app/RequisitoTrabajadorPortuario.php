<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RequisitoTrabajadorPortuario extends Model
{
    protected $table = 'requisitotrabajadorportuario';

    public $timestamps = false;

    protected $primaryKey = 'CodRequisitoTrabajadorPortuario';
}
