<?php

namespace App\Policies;

use App\Models\Depot;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class DepotPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        return $user->role_id>=1;
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Depot  $depot
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Depot $depot)
    {
        return $user->role_id>=1;
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return $user->role_id==2;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Depot  $depot
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Depot $depot)
    {
        return $user->role_id==2;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Depot  $depot
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Depot $depot)
    {
        return $user->role_id==2;
    }

    /**
     * Determine whether the user can delete the model via Bulk-menu.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Depot  $depot
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function deleteAny(User $user)
    {
        return $user->role_id==2;
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Depot  $depot
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Depot $depot)
    {
        return $user->role_id==2;
    }
    public function restoreAny(User $user)
    {
        return $user->role_id==2;
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Depot  $depot
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Depot $depot)
    {
        return $user->role_id==2;
    }
    public function forceDeleteAny(User $user)
    {
        return $user->role_id==2;
    }
}
