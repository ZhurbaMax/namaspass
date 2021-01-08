<?php

namespace app\Models;

use app\Classes\core\Db;

class User extends Db
{

    public function authUser($loginUser,$passwordUser)
    {
        $passwordUserSalt = sha1($passwordUser);
        //$dbConnec = new Db();
        //$dbConnect = $dbConnec->dbConn;
        $dbConnect = $this->dbConn;
        $result2 = $dbConnect->prepare("SELECT id FROM users WHERE login = :loginUser and password = :passwordUserSalt");
        $result2->bindParam(':passwordUserSalt', $passwordUserSalt);
        $result2->bindParam(':loginUser', $loginUser);
        $result2->execute();
        $id = $result2->fetchColumn();
        if (!empty($id)){
            $_SESSION['user_id'] = $id;
        }else{
            return false;
        }
    }

    function additionUser($emailUser,$passwordUser,$loginUser,$countryUser,$cityUser)
    {
        $passwordUserSalt = sha1($passwordUser);
        //$dbConnec = new Db();
        //$dbConnect = $dbConnec->dbConn;
        $dbConnect = $this->dbConn;
        $result = $dbConnect->prepare("INSERT INTO users (email,password,login,country,city) VALUES (:emailUser,:passwordUserSalt,:loginUser,:countryUser,:cityUser)");
        $result->bindParam(':emailUser', $emailUser);
        $result->bindParam(':passwordUserSalt', $passwordUserSalt);
        $result->bindParam(':loginUser', $loginUser);
        $result->bindParam(':countryUser', $countryUser);
        $result->bindParam(':cityUser', $cityUser);
        $result->execute();
    }
}