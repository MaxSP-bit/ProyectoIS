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
        $user->loadMissing('puesto');
        return $user->esPuesto('Auditor', 'Supervisor', 'Coordinador', 'Jefe de Área', 'auditor', 'supervisor', 'coordinador', 'jefe_area');
    }

    public function view(User $user, Documento $documento): bool
    {
        $user->loadMissing('puesto');
        return $user->esPuesto('Auditor', 'Supervisor', 'Coordinador', 'Jefe de Área', 'auditor', 'supervisor', 'coordinador', 'jefe_area');
    }

    // Supervisor en adelante, solo para Cancelado o Entregado
    public function solicitarCambioEstado(User $user, Documento $documento, string $estado): bool
    {
        $user->loadMissing('puesto');
        
        return in_array($estado, self::ESTADOS_CON_APROBACION, true)
            && $user->esPuesto('Supervisor', 'Coordinador', 'Jefe de Área', 'supervisor', 'coordinador', 'jefe_area');
    }

    // Coordinador en adelante
    public function aprobarCambioEstado(User $user, Documento $documento): bool
    {
        $user->loadMissing('puesto');
        return $user->esPuesto('Coordinador', 'Jefe de Área', 'coordinador', 'jefe_area');
    }

    public function create(User $user): bool { 
        $user->loadMissing('puesto');
        return $user->esPuesto('Supervisor', 'Coordinador', 'Jefe de Área', 'supervisor', 'coordinador', 'jefe_area');
     }

    public function update(User $user, Documento $documento): bool { 
        $user->loadMissing('puesto');
        return $user->esPuesto('Supervisor', 'Coordinador', 'Jefe de Área', 'supervisor', 'coordinador', 'jefe_area');
    }

    public function delete(User $user, Documento $documento): bool {
        $user->loadMissing('puesto');
        $documento->loadMissing('estado');

        return $user->esPuesto('Supervisor', 'Coordinador', 'Jefe de Área', 'supervisor', 'coordinador', 'jefe_area')
        && $documento->estado?->esdo_estado_documento === 'Cancelado';
    }
    public function restore(User $user, Documento $documento): bool { 
        $user->loadMissing('puesto');
        return $user->esPuesto('Supervisor', 'Coordinador', 'Jefe de Área', 'supervisor', 'coordinador', 'jefe_area');
    }

    public function forceDelete(User $user, Documento $documento): bool { 
        $user->loadMissing('puesto');
        return $user->esPuesto('Supervisor', 'Coordinador', 'Jefe de Área', 'supervisor', 'coordinador', 'jefe_area');
     }
}