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
        $result2 = $dbConnect->prepare("SELECT * FROM products WHERE title LIKE :titleProduct ");
        $titleProduct = "%".$titleProduct."%";
        $result2->bindParam(':titleProduct', $titleProduct);
        $result2->execute();
        $searchTitleProduct = $result2->fetchAll();
        return $searchTitleProduct;
    }

    public function shopMaxfilter()
    {
        $dbConnect = $this->dbConn;
        $result2 = $dbConnect->prepare("SELECT * FROM products ORDER BY price DESC ");
        $result2->bindParam(':titleProduct', $titleProduct);
        $result2->execute();
        $maxFilterProduct = $result2->fetchAll();
        return $maxFilterProduct;
    }

    public function shopMinfilter()
    {
        $dbConnect = $this->dbConn;
        $result2 = $dbConnect->prepare("SELECT * FROM products ORDER BY price ASC ");
        $result2->bindParam(':titleProduct', $titleProduct);
        $result2->execute();
        $minFilterProduct = $result2->fetchAll();
        return $minFilterProduct;
    }

    public function filterBrandViews()
    {
        $dbConnect = $this->dbConn;
        $sql = "SELECT DISTINCT brand FROM products";
        $result = $dbConnect->query($sql);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $brands = $result->fetchAll();
        $newArray=[];
        foreach ($brands as $item=>$value){
            $newArray[] = $value['brand'];
        }
        return $newArray;
    }

    public function filterBrand($brandProduct)
    {
        $dbConnect = $this->dbConn;
        $searchBrandProduct = [];
        foreach ($brandProduct as $brand){
            $result = $dbConnect->prepare("SELECT * FROM products WHERE brand = :brand ");
            $result->bindParam(':brand', $brand);
            $result->execute();
            $searchBrandProduct[] = $result->fetchAll();
        }
        return $searchBrandProduct;
    }

}
