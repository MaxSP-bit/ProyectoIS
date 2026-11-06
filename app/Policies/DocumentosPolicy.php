<?php

namespace App\Policies;

use App\Models\Documento;
use App\Models\User;

class DocumentoPolicy
{
    private const ESTADOS_CON_APROBACION = ['Cancelado', 'Entregado'];

    // Todos los puestos pueden consultar
    public function viewAny(User $user): bool
    {
        return $user->esPuesto('Auditor', 'Supervisor', 'Coordinador', 'Jefe de Área');
    }

    public function view(User $user, Documento $documento): bool
    {
        return $user->esPuesto('Auditor', 'Supervisor', 'Coordinador', 'Jefe de Área');
    }

    // Supervisor en adelante, solo para Cancelado o Entregado
    public function solicitarCambioEstado(User $user, Documento $documento, string $estado): bool
    {
        return in_array($estado, self::ESTADOS_CON_APROBACION, true)
            && $user->esPuesto('Supervisor', 'Coordinador', 'Jefe de Área');
    }

    // Coordinador en adelante
    public function aprobarCambioEstado(User $user, Documento $documento): bool
    {
        return $user->esPuesto('Coordinador', 'Jefe de Área');
    }

    public function create(User $user): bool { return false; }
    public function update(User $user, Documento $documento): bool { return false; }
    public function delete(User $user, Documento $documento): bool { return false; }
    public function restore(User $user, Documento $documento): bool { return false; }
    public function forceDelete(User $user, Documento $documento): bool { return false; }
}