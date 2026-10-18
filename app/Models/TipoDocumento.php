<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoDocumento extends Model
{
    protected $table = 'tipo_documento';

    protected $primaryKey = 'tido_id_tipo_documento';

    public $timestamps = false;

    protected $fillable = [
        'tido_tipo_documento',
    ];
}
