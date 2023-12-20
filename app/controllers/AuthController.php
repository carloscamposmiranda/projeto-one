<?php

namespace Controllers;

class AuthController
{
    public function login(): void
    {
        require_once ('../views/auth/login.php');
    }

}