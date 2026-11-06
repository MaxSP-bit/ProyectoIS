<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\Response;

class UserPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        $user->loadMissing('puesto');
        return $user->esPuesto('Auditor', 'Supervisor', 'Coordinador', 'Jefe de Área', 'auditor', 'supervisor', 'coordinador', 'jefe_area');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, User $model): bool
    {
        $user->loadMissing('puesto');
        return $user->esPuesto('Auditor', 'Supervisor', 'Coordinador', 'Jefe de Área', 'auditor', 'supervisor', 'coordinador', 'jefe_area');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        $user->loadMissing('puesto');
        return $user->esPuesto('Supervisor', 'Coordinador', 'Jefe de Área', 'supervisor', 'coordinador', 'jefe_area');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, User $model): bool
    {
        $user->loadMissing('puesto');
        return $user->esPuesto('Supervisor', 'Coordinador', 'Jefe de Área', 'supervisor', 'coordinador', 'jefe_area');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, User $model): bool
    {
        $user->loadMissing('puesto');
        return $user->esPuesto('Supervisor', 'Coordinador', 'Jefe de Área', 'supervisor', 'coordinador', 'jefe_area');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, User $model): bool
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, User $model): bool
    {
        return false;
    }
}