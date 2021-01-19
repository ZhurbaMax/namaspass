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
            include ('views/you-are-logged.php');
        }else{
            $errors = [];
            $check = [];
            $password = $_POST['password'];
            $login = $_POST['login'];
            if (!empty($_POST)) {
                $checkAuthForm = new MainController();
                $check =  $checkAuthForm->checkAuthForm($login,$password,$errors);
                if (empty($check)) {
                    $authUser = new User();
                    $authUser->authUser($login, $password);
                }else{
                    $errors = $check;
                }
            }
            include ('views/auth.php');
        }
    }

    public function registration()
    {
        if (!empty($_SESSION['user_id'])){
            include ('views/you-are-logged.php');
        }else{
            $errors = [];
            $check = [];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $login = $_POST['login'];
            $country = $_POST['country'];
            $city = $_POST['city'];
            if (!empty($_POST)){
                $checkRegistrationForm = new MainController();
                $check = $checkRegistrationForm->checkRegistrationForm($email,$password,$login,$country,$city,$errors);
            }
            if (empty($check)){
                $additionUser = new User();
                $additionUser->additionUser($email,$password,$login,$country,$city);
            }else{
                $errors = $check;
            }
            include ('views/registration.php');
        }
    }

    public function checkAuthForm($checkLogin,$checkPassword,$checkErrors)
    {
        if (empty($checkLogin)) {
            $checkErrors[] = '* please enter login';
        }
        if (empty($checkPassword)) {
            $checkErrors[] = '* please enter password';
        }
        return $checkErrors;
    }

    public function checkRegistrationForm($checkEmail,$checkPassword,$checkLogin,$checkCountry,$checkCity,$checkErrors)
    {
        if (empty($checkEmail)){
            $checkErrors[] = '* please enter email';
        }
        if (empty($checkPassword)){
            $checkErrors[] = '* please enter password';
        }
        if (empty($checkLogin)){
            $checkErrors[] = '* please enter login';
        }
        if (empty($checkCountry)){
            $checkErrors[] = '* please enter country';
        }
        if (empty($checkCity)){
            $checkErrors[] = '* please enter city';
        }
        if (strlen($checkEmail) > 90){
            $checkErrors[] = '* you have exceeded the limit of 90 characters';
        }
        if (strlen($checkPassword) < 6){
            $checkErrors[] = ' * enter at least 6 characters';
        }
        if (strlen($checkLogin) > 100){
            $checkErrors[] = '* you have exceeded the limit of 100 characters';
        }
        if (strlen($checkCountry) > 100){
            $checkErrors[] = '* you have exceeded the limit of 100 characters';
        }
        if (strlen($checkCity) > 100){
            $checkErrors[] = '* you have exceeded the limit of 100 characters';
        }
        return $checkErrors;
    }
}
