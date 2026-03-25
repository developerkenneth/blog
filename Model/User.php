<?php
require_once "Core/Config.php";
require_once ROOT . "/Core/Db.php";



class User
{

    // find user by email
    public static function find_by_email($email)
    {
        $sql = "SELECT * FROM `users` WHERE `email`= ? ";
        $stmt = Db::connect()->prepare($sql);
        $stmt->execute([$email]);
        $count = $stmt->rowCount();
        return $count;
    }

    // create new user 
    public static function Create($data)
    {
        $sql = "INSERT INTO `users` (`name`, `email`, `password`) VALUES (?, ?, ?)";
        $stmt = Db::connect()->prepare($sql);
        if ($stmt->execute($data)) {
            return true;
        }
        return false;
    }
}
