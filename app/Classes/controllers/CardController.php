<?php


namespace app\Classes\controllers;

use app\Models\Card;

class CardController
{
    public function card()
    {

        if (!isset($_SESSION['cart']['id'])){
            include ('views/cart-is-empty.php');
        }
        if (isset($_SESSION['cart']['id'])){
            include ('views/card.php');
            $count = 0;
                foreach ($_SESSION['cart']['id'] as $row)
                {
                    $count++;
                    $addTov = new CardController();
                    $addTov->addViewCart($row,$count);
                }
            foreach ($_SESSION['cart']['id'] as $row)
            {
                $sumTotalCart = new Card();
                $res[] = $sumTotalCart->sumTotalProduct($row);
            }
            $TotalCos =  array_sum($res);
            include ('views/total-cost.php');
        }
        if (!empty($_POST['id_delete'])){
            //unset();
        }
    }

    public function addViewCart($newAr,$countView)
    {
        $addToCard = new Card();
        $cart = $addToCard->addToCard($newAr);
        include ('views/cart.php');
    }

}
