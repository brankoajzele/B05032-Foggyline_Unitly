<?php

namespace Foggyline\Unitly\Model;

class User
{
    protected $user;

    public function saveUser($user)
    {
        $this->user = $user;
        return $this;
    }

    public function getUser()
    {
        return $this->user;
    }
}
