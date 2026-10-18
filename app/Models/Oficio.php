<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Oficio extends Model
{
    protected $table = 'oficios';
    protected $primaryKey = 'ofic_id_oficio';
    
    public $timestamps = true;
    const CREATED_AT = 'ofic_fecha_creacion';
    const UPDATED_AT = 'ofic_fecha_actualizacion';

    protected $fillable = 
    [
        'ofic_descripcion',
        'tipo_revision_id'
    ];

    public function tipoRevision(): BelongsTo
    {
        return $this->belongsTo(TipoRevision::class, 'tipo_revision_id', 'tire_id_tipo_revision');
    }
}