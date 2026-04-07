<?php

require_once  "../Core/Config.php";
require_once ROOT . "/Core/Db.php";

class Post
{
    // fetch all method
    public static function index()
    {
        // db
        $db = new Db();
        $connection = $db->connect();
        $sql = "SELECT * FROM `posts` ORDER BY `id` DESC";
        $stmt = $connection->query($sql);
        $result = $stmt->fetchAll();
        return $result;
    }
}
