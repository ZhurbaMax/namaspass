<?php


namespace app\Classes\controllers;


class AddProductCartController
{
    public function addProductCart()
    {
        $_SESSION['cart']['id'][] = $_POST['id_card'];
    }
}