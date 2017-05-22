<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DocumentosAdjuntos extends Model
{
    protected $table = 'documentosadjuntos';

    public $timestamps = false;

    protected $primaryKey = 'CodDocuementoAdjunto';
}
