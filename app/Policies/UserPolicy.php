<?php

namespace App\Policies;

use App\Models\User;

class UserPolicy
{
    public function isAdmin(User $user)
{
    return $user->role === 'admin' && $user->admin_password === 'minho1234';
}
    public function __construct()
    {
        //
    }
}
