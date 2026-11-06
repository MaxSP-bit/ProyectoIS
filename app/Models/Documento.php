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
        'docu_fecha_creacion',
        'tido_id_tipo_documento',
        'esdo_id_estado_documento',
        'cont_id_contribuyente',
        'ofic_id_oficio',
        'docu_archivo',
    ];

    public function tipo(): BelongsTo
    {
        return $this->belongsTo(TipoDocumento::class, 'tido_id_tipo_documento', 'tido_id_tipo_documento');
    }

    public function estado(): BelongsTo
    {
        return $this->belongsTo(EstadoDocumento::class, 'esdo_id_estado_documento', 'esdo_id_estado_documento');
    }

    public function contribuyente(): BelongsTo
    {
        return $this->belongsTo(Contribuyente::class, 'cont_id_contribuyente', 'cont_id_contribuyente');
    }

    public function oficio(): BelongsTo
    {
        return $this->belongsTo(Oficio::class, 'ofic_id_oficio', 'ofic_id_oficio');
    }

}
