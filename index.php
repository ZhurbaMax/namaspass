<?php

require_once ('config.php');

use app\Classes\ClassOne;
use app\Classes\core\Router;

//$getInfo = new ClassOne();
//echo $getInfo->getInfo();

//$getUser = new ClassOne();
//$getUser ->getUser();
include ('views/header.php');
$loginUser = new Router();
$loginUser->loginUser();
include ('views/footer.php');

