<?php

namespace App\Policies;

use App\Models\Oficio;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class OficioPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        $user->loadMissing('puesto');
        return $user->esPuesto('Jefe de Área', 'Supervisor', 'Auditor', 'Coordinador', 'jefe_area', 'supervisor', 'auditor', 'coordinador');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Oficio $oficio): bool
    {
        $user->loadMissing('puesto');
        return $user->esPuesto('Jefe de Área', 'Supervisor', 'Auditor', 'Coordinador', 'jefe_area', 'supervisor', 'auditor', 'coordinador');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        $user->loadMissing('puesto');
        return $user->esPuesto('Jefe de Área', 'Supervisor', 'Coordinador', 'jefe_area', 'supervisor', 'coordinador');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Oficio $oficio): bool
    {
        $user->loadMissing('puesto');
        return $user->esPuesto('Jefe de Área', 'Supervisor', 'Coordinador', 'jefe_area', 'supervisor', 'coordinador');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Oficio $oficio): bool
    {
        $user->loadMissing('puesto');

        $rolPermitido = $user->esPuesto('Jefe de Área', 'Supervisor', 'Coordinador', 'jefe_area', 'supervisor', 'coordinador');

        $documentosCancelados = $oficio->documentos()
            ->whereHas('estado', function ($query) {
                $query->where('esdo_estado_documento', 'Cancelado');
            })->exists(); // Verifica si hay documentos asociados al oficio con estado "Cancelado"

        // El oficio solo se puede eliminar si el rol es correcto Y sus documentos reflejan la cancelación
        return $rolPermitido && $documentosCancelados;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Oficio $oficio): bool
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Oficio $oficio): bool
    {
        return false;
    }
}