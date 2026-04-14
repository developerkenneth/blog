<?php

require_once  dirname(__DIR__) . "/Core/Config.php";
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

    // get a single post
    public static function find($id){
           // db
        $db = new Db();
        $connection = $db->connect();
        $sql = "SELECT * FROM `posts` WHERE `id`= ? LIMIT 1";
        $stmt = $connection->prepare($sql);
        $stmt->execute([$id]);
        $result = $stmt->fetch();
        return $result;
    }

    // create post
    public static function create(array $post_data)
    {
        $db = new Db();
        $connection = $db->connect();

        $keys = array_keys($post_data);
        $values = array_values($post_data);

        $placeholder = "?";

        for ($i = 1; $i < count($values); $i++) {
            $placeholder .= ",?";
        }

        $fields = implode("`,`", $keys);

        $sql = "INSERT INTO posts (`$fields`) values($placeholder)";
        $stmt = $connection->prepare($sql);
        if ($stmt->execute($values)) {
            return true;
        } else {
            return false;
        }
    }

    // delete post
    public static function delete($id)
    {
        $db = new Db();
        $connection = $db->connect();
        $sql = "DELETE FROM `posts` WHERE `id` = ?";
        $stmt = $connection->prepare($sql);
        if($stmt->execute([$id])){
            return true;
        }

        return false;
    }

    // edit or update post
    public static function edit($data, $id){
        $db = new Db();
        $connection = $db->connect();
        $placeholder_string = "";
        $values = [];

        foreach($data as $key => $val){
            $placeholder_string .= "`$key` = ?,";
            $strlen = (int) strlen($placeholder_string);
            $query = substr($placeholder_string, 0, $strlen - 1);
            $values[] = $val;
        }

        array_push($values, $id);
        $sql = "UPDATE `posts` SET $query WHERE `id` = ?";
        $stmt = $connection->prepare($sql);
        if($stmt->execute($values)){
            return true;
        }else{
            return false;
        }

    }
}
