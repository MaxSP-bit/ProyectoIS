<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
    protected $table = 'documento_';

    protected $primaryKey = 'docu_id_documento';

    public $timestamps = false;

    protected $fillable = [
        'docu_folio',
        'docu_descripcion',
    ];
}
