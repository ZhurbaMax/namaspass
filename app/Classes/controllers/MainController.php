<?php

namespace app\Classes\controllers;

use app\Models\User;

class MainController
{
    public function index()
    {
        include ('views/home.php');
    }

    public function auth()
    {
        if (!empty($_SESSION['user_id'])){
            die('вы авторизованы');
        }
        $errors = [];
        $check = [];
        $password = $_POST['password'];
        $login = $_POST['login'];
        if (!empty($_POST)) {
            $checkAuthForm = new User();
            $check =  $checkAuthForm->checkAuthForm($login,$password,$errors);
        }
        if (empty($check)) {
            $authUser = new User();
            $authUser->authUser($login, $password);
        }else{
            $errors = $check;
        }
        include ('views/auth.php');
    }

    }
