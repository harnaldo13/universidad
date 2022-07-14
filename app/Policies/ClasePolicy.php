<?php

namespace App\Policies;

use App\Models\Clase;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ClasePolicy
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
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Clase  $clase
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Clase $clase)
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
        $roles = User::all();
            foreach($roles as $rol){
                if($rol->id==auth()->id()){
                    if($rol->rol==2){
                        return true;
                    }else
                        return false;
                }
            }
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Clase  $clase
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Clase $clase)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Clase  $clase
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user)
    {
        $roles = User::all();
            foreach($roles as $rol){
                if($rol->rol==2){
                    return true;
                }
                return false;
            }
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Clase  $clase
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Clase $clase)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Clase  $clase
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Clase $clase)
    {
        //
    }
}
