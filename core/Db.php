<?php

class Db
{

    // CONNECTION VARIABLES
    private $host = "localhost";
    private $db = "blog";
    private $user = "root";
    private $password = "";
    public static $connect ;


    public function __construct() {

        try{
        $dsn = "mysql:host=$this->host;dbname=$this->db;";
        self::$connect = new PDO($dsn, $this->user, $this->password);
        self::$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        self::$connect->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
                
        }catch(PDOException $e){
            echo $e->getMessage();
        }
        
    }

}