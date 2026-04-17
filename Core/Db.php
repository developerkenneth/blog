<?php

class Db
{

    // CONNECTION VARIABLES
    private $host = "localhost";
    private $db = "blog";
    private $user = "root";
    private $password = "";
    private $con ;


    public function __construct() {

        try{
        $dsn = "mysql:host=$this->host;dbname=$this->db;";
        $pdo = new PDO($dsn, $this->user, $this->password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        $this->con = $pdo;
                
        }catch(PDOException $e){
            echo $e->getMessage();
        }
        
    }

    public static function connect (){
        return (new self)->con;
    }

}

