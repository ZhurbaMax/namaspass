<?php

namespace app\Classes\core;

use PDO;

class Db
{
    public $dbConn;
    public function __construct()
    {
        require_once ('config/dbConfig.php');
        $dsn = "mysql:host=". HOST . ";dbname=" . DBNAME . ";charset=" . CHARSET;
        $this->dbConn = new PDO($dsn, USER, PASSWORD);
    }
}
