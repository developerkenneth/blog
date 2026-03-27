<?php

class Db
{

    // CONNECTION VARIABLES
    private $host = "localhost";
    private $db = "blog";
    private $user = "root";
    private $password = "";
    private  $con ;


    public function __construct() {

        try{
        $dsn = "mysql:host=$this->host;dbname=$this->db;";
        $this->con = new PDO($dsn, $this->user, $this->password);
        $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->con->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
                
        }catch(PDOException $e){
            echo $e->getMessage();
        }
        
    }

    public static function connect (){
        return (new self)->con;
    }

}