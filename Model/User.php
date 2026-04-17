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

        $db = Db::connect();
        $sql = "INSERT INTO `users` (`name`, `email`, `password`) VALUES (?, ?, ?)";
        $stmt = $db->prepare($sql);
        if ($stmt->execute($data)) {
            $user_id = $db->lastInsertId();
            $stmt = $db->query("SELECT * FROM `users` WHERE id = '$user_id' LIMIT 1");
            $user_data = $stmt->fetch();
            return $user_data;
        }
        return false;
    }

    public static function find(string $column, string $value)
    {
        $db = Db::connect();
        $sql = "SELECT * FROM `users` WHERE $column = ? LIMIT 1";
        $stmt = $db->prepare($sql);
        $stmt->execute([$value]);
        $result = $stmt->fetch();
        return $result;
    }

    public static function total_users_count()
    {
        $db = Db::connect();

        $sql = "SELECT COUNT(*) FROM `users`";
        $stmt = $db->query($sql);
        $count = $stmt->fetchColumn();
        return $count;
    }

    public static function change_password($password, $user_id)
    {
        $password_hashed = Helpers::hash_password($password);
        $db = Db::connect();
        $sql = "UPDATE `users` SET `password` = ? WHERE `id` = ?";
        $stmt = $db->prepare($sql);

        if ($stmt->execute([$password_hashed, $user_id])) {
            return true;
        }

        return false;
    }
}
