<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Puesto extends Model
{
    protected $table = 'puestos';
    protected $primaryKey = 'pues_id_puesto';
    public $timestamps = false; 

    protected $fillable = 
    [
        'pues_nombre'
    ];

    public function empleados(): HasMany
    {
        return $this->hasMany(Empleado::class, 'puesto_id', 'pues_id_puesto');
    }
}