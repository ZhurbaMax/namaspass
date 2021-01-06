<?php

namespace app\Classes;
use app\Classes\Two\ClassTwo;

class ClassOne
{
    public function getInfo()
    {
        $setInfo = new ClassTwo();
        $b = $setInfo->setInfo('name');
        return $b;
    }

}