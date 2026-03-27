<?php

class Auth {

// this will login the user
    public static function login (array $data){

            session_start();
            $_SESSION['user_data'] = $data;
            $_SESSION['user_id'] = $data['id'];

            return true;
    }

    public static function is_logged_in(){
        if(!isset($_SESSION['user_id']) && empty($_SESSION['user_id'])){
            return false;
        }

        return true;
    }

    // it gives the user information from the $_Session global array variable
    public static function user(){
        return $_SESSION['user_data'];
    }

      // it gives the user_id  from the $_Session global array variable
    public static function user_id(){
        return $_SESSION['user_data'];
    }


    public static function login_redirect(){
        if(self::is_logged_in() === false){
            header("Location:index.php");
            exit();
        }
    }
}