<?php


namespace app\Classes\controllers;

class ViewController
{
    public function transferTo($pathView, $variableView, $variableBrand)
    {
        include $pathView;
    }
}
