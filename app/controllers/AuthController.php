<?php


namespace App\controllers;


use App\services\AuthService;

class AuthController
{
    protected AuthService $authService;

    public function __construct()
    {
        $this->authService = new AuthService();
    }

    public function login()
    {
       return $this->authService->checkUserEmailPassword($_REQUEST);
    }

    public function logout()
    {
        $this->authService->logout();
    }
}