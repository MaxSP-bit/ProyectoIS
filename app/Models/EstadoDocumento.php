<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EstadoDocumento extends Model
{
    protected $table = 'estado_documento';

    protected $primaryKey = 'esdo_id_estado_documento';

    public $timestamps = false;

    protected $fillable = [
        'esdo_estado_documento',
    ];
}
