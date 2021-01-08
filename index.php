<?php
require_once ('config.php');

use app\Classes\core\Router;


include ('views/header.php');

$loginUser = new Router();
$loginUser->loginUser();

include ('views/footer.php');

