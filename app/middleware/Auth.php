<?php

namespace App\Middleware;

class Auth
{
    public function __construct()
    {

    }

    public function isLogin()
    {
        if (!isset($_SESSION['userLogin'])) {
            header('Location: app/views/login.php');
        }
    }
}