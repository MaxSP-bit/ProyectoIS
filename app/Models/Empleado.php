<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Empleado extends Model
{
    protected $table = 'empleados';
    protected $primaryKey = 'empl_id_empleado';
    public $timestamps = false;

    protected $fillable = 
    [
        'empl_nombre_pila',
        'empl_apaterno',
        'empl_amaterno',
        'puesto_id'
    ];

    public function puesto(): BelongsTo
    {
        return $this->belongsTo(Puesto::class, 'puesto_id', 'pues_id_puesto');
    }

    public function documentos(): HasMany
    {
        return $this->hasMany(Documento::class, 'empleado_id', 'empl_id_empleado');
    }
}