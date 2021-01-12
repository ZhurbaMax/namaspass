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
            $newArr = [];
            foreach ($wiewsProduct as $items=>$value){
                foreach ($value as $item=>$val){
                    $newArr[$item]=$val;
                }
            }
            include ('views/shop.php');
            die();
        }
        if (!empty($_POST['brand'])){
            $poo = $_POST['brand'];
            $titleProdFilter = new Shop();
            $wiewsProduct = $titleProdFilter->filterBrand($poo);
            $newArr = [];
            foreach ($wiewsProduct as $items3){
                foreach ($items3 as $item3=>$val3){
                    foreach ($val3 as $item4=>$val4){
                        $newArr[$item4]=$val4;
                    }
                }
            }
            include ('views/brand.php');
            die();
        }
        if (!empty($_GET['filter_price']) && $_GET['filter_price'] == 'dear first'){
            $shopMaxfilter = new Shop();
            $shopMaxfilter->shopMaxfilter();
            $wiewsProduct = $shopMaxfilter->shopMaxfilter();
            $newArr = [];
            foreach ($wiewsProduct as $items=>$value){
                foreach ($value as $item=>$val){
                    $newArr[$item]=$val;
                }
            }
            include ('views/shop.php');
            die();
        }
        if (!empty($_GET['filter_price']) && $_GET['filter_price'] == 'cheap at first'){
            $shopMaxfilter = new Shop();
            $shopMaxfilter->shopMinfilter();
            $wiewsProduct = $shopMaxfilter->shopMinfilter();
            $newArr = [];
            foreach ($wiewsProduct as $items=>$value){
                foreach ($value as $item=>$val){
                    $newArr[$item]=$val;
                }
            }
            include ('views/shop.php');
            die();
        }
        if (empty($_POST['title'])){
            $shopProducts = new Shop();
            $wiewsProduct = $shopProducts->shopProducts();
            $newArray = [];
            foreach ($wiewsProduct as $items=>$value){
                foreach ($value as $item=>$val){
                    $newArray[$item]=$val;
                }
            }
            include ('views/shop.php');
        }
    }

}