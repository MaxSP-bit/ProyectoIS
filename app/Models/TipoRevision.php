<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TipoRevision extends Model
{
    protected $table = 'tipos_revision';
    protected $primaryKey = 'tire_id_tipo_revision';
    public $timestamps = false;

    protected $fillable = 
    [
        'tire_tipo_revision'
    ];

    public function oficios(): HasMany
    {
        return $this->hasMany(Oficio::class, 'tipo_revision_id', 'tire_id_tipo_revision');
    }
}