<?php

namespace app\Classes\Two;

use app\Classes\core\Db;

class ClassTwo
{
    public $name;
    public function setInfo($value)
    {
        return $value;
    }

    function additionUser($emailUser,$passwordUser,$loginUser,$countryUser,$cityUser){
        $passwordUserSalt = sha1($passwordUser);
        $dbConnec = new Db();
        $dbConnect = $dbConnec->dbConn;
        $result = $dbConnect->prepare("INSERT INTO users (email,password,login,country,city) VALUES (:emailUser,:passwordUserSalt,:loginUser,:countryUser,:cityUser)");
        $result->bindParam(':emailUser', $emailUser);
        $result->bindParam(':passwordUserSalt', $passwordUserSalt);
        $result->bindParam(':loginUser', $loginUser);
        $result->bindParam(':countryUser', $countryUser);
        $result->bindParam(':cityUser', $cityUser);
        $result->execute();
    }


}