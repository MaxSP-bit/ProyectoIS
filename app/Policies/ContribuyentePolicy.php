<?php

namespace App\Policies;

use App\Models\Contribuyente;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class ContribuyentePolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        // Aseguramos cargar la relación del puesto si no está cargada
        $user->loadMissing('puesto');

        return $user->esPuesto('Jefe de Área', 'Supervisor', 'Auditor', 'Coordinador', 'jefe_area', 'supervisor', 'auditor', 'coordinador');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Contribuyente $contribuyente): bool
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
    public function update(User $user, Contribuyente $contribuyente): bool
    {
        $user->loadMissing('puesto');
        return $user->esPuesto('Jefe de Área', 'Supervisor', 'Coordinador', 'jefe_area', 'supervisor', 'coordinador');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Contribuyente $contribuyente): bool
    {
        $user->loadMissing('puesto');
        return $user->esPuesto('Jefe de Área', 'Coordinador', 'jefe_area', 'coordinador');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Contribuyente $contribuyente): bool
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Contribuyente $contribuyente): bool
    {
        return false;
    }
}