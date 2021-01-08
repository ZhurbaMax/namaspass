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

}
