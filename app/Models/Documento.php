<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Documento extends Model
{
    protected $table = 'documento_';

    protected $primaryKey = 'docu_id_documento';

    public $timestamps = false;

    protected $fillable = [
        'docu_folio',
        'docu_descripcion',
    ];

    public function tipo(): BelongsTo
    {
        return $this->belongsTo(TipoDocumento::class, 'tido_id_tipo_documento', 'tido_id_tipo_documento');
    }

    public function estado(): BelongsTo
    {
        return $this->belongsTo(EstadoDocumento::class, 'esdo_id_estado_documento', 'esdo_id_estado_documento');
    }

}
