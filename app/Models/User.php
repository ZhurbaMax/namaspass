<?php

namespace app\Models;

use app\Classes\core\Db;

class User
{
    public function checkAuthForm($checkLogin,$checkPassword,$checkErrors)
    {
        if (empty($checkLogin)) {
            $checkErrors[] = '* please enter login';
        }
        if (empty($checkPassword)) {
            $checkErrors[] = '* please enter password';
        }
        return $checkErrors;
    }

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