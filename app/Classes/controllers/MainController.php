<?php

namespace app\Classes\controllers;

use app\Classes\Auth;

class MainController
{
    public function index()
    {
        //echo 'это корень сайта';
        include ('views/home.php');
    }

    public function auth()
    {
        $errors = [];
        $check = [];
        $password = $_POST['password'];
        $login = $_POST['login'];
        if (!empty($_POST)) {
            $checkAuthForm = new Auth();
            $check =  $checkAuthForm->checkAuthForm($login,$password,$errors);
        }
        if (empty($check)) {
            $authUser = new Auth();
            $authUser->authUser($login, $password);
        }else{
            $errors = $check;
        }
        include ('views/auth.php');

    }

    }
