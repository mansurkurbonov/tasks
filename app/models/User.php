<?php

namespace App\Models;

use App\Core\App;
use App\Core\Database\Connection;
use PDO;

class User
{
    /**
     * @param $login
     * @param $password
     * @return mixed
     */
    public static function checkUser($login, $password)
    {
        $connection = Connection::make(App::get('config')['database']);
        $sql = sprintf(
            "SELECT * FROM `users` WHERE `login` = '%s' AND `password` = '%s' ",
            $login,
            $password
        );

        $statement = $connection->prepare($sql);
        $statement->execute();
        $user = $statement->fetch(PDO::FETCH_OBJ);

        return $user;
    }
}