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
    public function getUser()
    {
        $setUser = new ClassTwo();
        $setUser->additionUser('testdb@gmail.com','123456789','testDb','Ukraine','Kyiv');
    }
}