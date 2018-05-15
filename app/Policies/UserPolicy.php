<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function update(User $currentUsesr, User $user)
    {
        return $currentUsesr->id === $user->id;
    }

    public function destroy(User $currentUsesr, User $user)
    {
        return $currentUsesr->is_admin && $currentUsesr->id !== $user->id;
    }
}
