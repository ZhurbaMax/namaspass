<?php


namespace app\Classes\controllers;

use app\Models\Shop;

class ShopController
{
    public function shop()
    {
        $filterBrand = new Shop();
        $filterBrands = $filterBrand->filterBrandViews();

        if (!empty($_POST['title'])){
            $titleProd = $_POST['title'];
            $searchProduct = new Shop();
            $searchProduct->searchProductForTitle($titleProd);
            $wiewsProduct = $searchProduct->searchProductForTitle($titleProd);
            include ('views/shop.php');
            die();
        }
        if (!empty($_POST['brand'])){
            $poo = $_POST['brand'];
            $titleProdFilter = new Shop();
            $wiewsProduct = $titleProdFilter->filterBrand($poo);
            include ('views/brand.php');
            die();
        }
        if (!empty($_GET['filter_price']) && $_GET['filter_price'] == 'dear first'){
            $shopMaxfilter = new Shop();
            $shopMaxfilter->shopMaxfilter();
            $wiewsProduct = $shopMaxfilter->shopMaxfilter();
            include ('views/shop.php');
            die();
        }
        if (!empty($_GET['filter_price']) && $_GET['filter_price'] == 'cheap at first'){
            $shopMaxfilter = new Shop();
            $shopMaxfilter->shopMinfilter();
            $wiewsProduct = $shopMaxfilter->shopMinfilter();
            include ('views/shop.php');
            die();
        }
        if (empty($_POST['title'])){
            $shopProducts = new Shop();
            $wiewsProduct = $shopProducts->shopProducts();
            include ('views/shop.php');
        }
        if (!empty($_POST['id_card'])){
            $_SESSION['cart']['id'][] = $_POST['id_card'];
            $_SESSION['cart']['number']['quantity'] = $_POST['number_card'];
        }
    }

}
