<?php

namespace app\Models;

use app\Classes\core\Db;
use PDO;

class Shop extends Db
{
    public function shopProducts()
    {
        $dbConnect = $this->dbConn;
        $sql = "SELECT * FROM products";
        $result = $dbConnect->query($sql);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $products = $result->fetchAll();
        return $products;
    }

    public function searchProductForTitle($titleProduct)
    {
        $dbConnect = $this->dbConn;
        $result2 = $dbConnect->prepare("SELECT * FROM products WHERE title = :titleProduct");
        $result2->bindParam(':titleProduct', $titleProduct);
        $result2->execute();
        $searchTitleProduct = $result2->fetchAll();
        return $searchTitleProduct;
    }

}
