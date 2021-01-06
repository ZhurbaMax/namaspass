<?php
include ('app/Classes/ClassOne.php');
include ('app/Classes/Two/ClassTwo.php');
use app\Classes\ClassOne;
$getInfo = new ClassOne();
echo $getInfo->getInfo();

