<?php

require_once  dirname(__DIR__) . "/Core/Config.php";
require_once ROOT . "/Core/Db.php";

class Category
{
    // fetch all method
    public static function index()
    {
        // db
        $db = new Db();
        $connection = $db->connect();
        $sql = "SELECT * FROM `categories` ORDER BY `id` DESC";
        $stmt = $connection->query($sql);
        $result = $stmt->fetchAll();
        return $result;
    }
}
