<?php


namespace app\Classes\controllers;

use app\Models\Shop;


class FilterPriceController
{
    public function filterPrice()
    {
        if (!empty($_POST['filter_price'])){
            if ($_POST['filter_price'] == 'dear first'){
                $shopMaxfilter = new Shop();
                $shopMaxfilter->shopMaxfilter();
                $wiewsProduct = $shopMaxfilter->shopMaxfilter();
            }
            if ($_POST['filter_price'] == 'cheap at first'){
                $shopMaxfilter = new Shop();
                $shopMaxfilter->shopMinfilter();
                $wiewsProduct = $shopMaxfilter->shopMinfilter();
            }
            $filterBrand = new Shop();
            $filterBrands = $filterBrand->filterBrandViews();
            $transferTo = new ViewController();
            $transferTo->transferTo('views/shop.php', $wiewsProduct, $filterBrands);
        }
    }

}