<?php

namespace App\Http\Services;


use App\User;

class TestService
{

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function getUserNameUpper()
    {
        return strtoupper($this->user->name);
    }
}