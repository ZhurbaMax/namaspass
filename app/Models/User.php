<?php

namespace app\Models;

use app\Classes\core\Db;

class User
{

    public function authUser($loginUser,$passwordUser)
    {
        $passwordUserSalt = sha1($passwordUser);
        $dbConnec = new Db();
        $dbConnect = $dbConnec->dbConn;
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
}