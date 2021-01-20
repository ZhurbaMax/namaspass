<?php


namespace app\Classes\controllers;

use app\Models\Shop;

class ShopController
{
    public function shop()
    {
        $filterBrand = new Shop();
        $filterBrands = $filterBrand->filterBrandViews();
        $shopProducts = new Shop();
        $wiewsProduct = $shopProducts->shopProducts();
        $transferTo = new ViewController();
        $transferTo->transferTo('views/shop.php', $wiewsProduct, $filterBrands);
        if (!empty($_POST['id_card'])){
            $_SESSION['cart']['id'][] = $_POST['id_card'];
        }
    }
}
