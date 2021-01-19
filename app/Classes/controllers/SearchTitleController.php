<?php


namespace app\Classes\controllers;


use app\Models\Shop;

class SearchTitleController
{
    public function searchTitle()
    {
        if (!empty($_POST['title'])){
            $titleProd = $_POST['title'];
            $searchProduct = new Shop();
            $searchProduct->searchProductForTitle($titleProd);
            $wiewsProduct = $searchProduct->searchProductForTitle($titleProd);

            $filterBrand = new Shop();
            $filterBrands = $filterBrand->filterBrandViews();

            $transferTo = new ViewController();
            $transferTo->transferTo('views/shop.php', $wiewsProduct, $filterBrands);
        }
    }
}