<?php

require_once ('config.php');

use app\Classes\ClassOne;

$getInfo = new ClassOne();
echo $getInfo->getInfo();

