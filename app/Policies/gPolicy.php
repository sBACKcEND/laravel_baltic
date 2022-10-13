<?php

namespace App\Policies;

use App\Models\User;
use App\Models\group;
use Illuminate\Auth\Access\HandlesAuthorization;

class gPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user, Group $group)
    {
        return $user->id==$group->teacher_id;
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\group  $group
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, group $group)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return $user->type=="teacher";
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\group  $group
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, group $group)
    {
        return $user->type=="teacher";
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\group  $group
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, group $group)
    {
        return $user->id==$group->teacher_id;
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\group  $group
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, group $group)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\group  $group
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, group $group)
    {
        //
    }
}
