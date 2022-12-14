<?php

namespace App\Policies;

use App\Models\User;
use App\Models\subject;
use Illuminate\Auth\Access\HandlesAuthorization;
use App\Models\Group;

class subjectPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(Subject $subject, Group $group)
    {
        return $subject->group_id==$group->id;
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\subject  $subject
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, subject $subject)
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
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\subject  $subject
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, subject $subject)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\subject  $subject
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, subject $subject)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\subject  $subject
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, subject $subject)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\subject  $subject
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, subject $subject)
    {
        //
    }
}
