<?php


namespace App\services;

use App\models\UserModel;

class AuthService
{
    protected UserModel $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function checkUserEmailPassword($request)
    {
        $user = $this->userModel->findByEmailPassword($request);
        if ($user) {
            $_SESSION['userLogin'] = $user;
            header('Location: ../../index.php');
        }
        return false;
    }

    public function logout()
    {
        unset($_SESSION['userLogin']);
        header('Location: app/views/login.php');
    }
}