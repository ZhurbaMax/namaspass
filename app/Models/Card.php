<?php


namespace app\Models;


use app\Classes\core\Db;

class Card extends Db
{
    public function addToCard($addIdCard)
    {
        $dbConnect = $this->dbConn;
        $result = $dbConnect->prepare("SELECT * FROM products WHERE id_product = :addIdCard ");
        $result->bindParam(':addIdCard', $addIdCard);
        $result->execute();
        $cardProduct = $result->fetchAll();
        return $cardProduct;
    }

    public function sumTotalProduct($addIdCards)
    {
        $dbConnect = $this->dbConn;
        $result = $dbConnect->prepare("SELECT price FROM products WHERE id_product = :addIdCards");
        //$addIdCards = implode(', ', $addIdCards);
        $result->bindParam(':addIdCards', $addIdCards);
        $result->execute();
        $sum = $result->fetchColumn();
        return $sum;
    }

}
