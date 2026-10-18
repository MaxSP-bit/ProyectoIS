<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contribuyente extends Model
{
    protected $table = 'contribuyente_';

    protected $primaryKey = 'cont_id_contribuyente';

    public $timestamps = false;

    protected $fillable = [
        'nombre',
        'apellidoPaterno',
        'apellidoMaterno',
        'cont_razon_social',
        'cont_rfc',
    ];
}
