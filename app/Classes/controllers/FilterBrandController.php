<?php


namespace app\Classes\controllers;

use app\Models\Shop;


class FilterBrandController
{
    public function filterBrand()
    {
        if (!empty($_POST['brand'])) {
            $brandFilter = $_POST['brand'];
            $titleProdFilter = new Shop();
            $wiewsProduct = $titleProdFilter->filterBrand($brandFilter);
            $filterBrand = new Shop();
            $filterBrands = $filterBrand->filterBrandViews();
            $transferTo = new ViewController();
            $transferTo->transferTo('views/shop.php', $wiewsProduct, $filterBrands);
        }
    }
}
