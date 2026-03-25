<?php
require_once "Core/Config.php";
require_once CORE . "/Helpers.php";
require_once ROOT . "/Model/User.php";



// takes in all the errors
$errors = [];




if ($_SERVER['REQUEST_METHOD'] === "POST") {


    $required_field = ['name', 'email', 'password', 'password_again'];
    foreach ($_POST as $key => $value) {
        if (in_array($key, $required_field) && empty($value)) {
            array_push($errors, "$key is required");
        }
    }

    if (count($errors) < 1) {


        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password_again = $_POST['password_again'];

        if (Helpers::is_email($email) === false) {
            array_push($errors, "$email is not a valid email.");
        }

        if (User::find_by_email($email)) {
            array_push($errors, "$email is already taken.");
        }

        if ($password !== $password_again) {
            array_push($errors, "password does not match");
        }

        if ($password < 6) {
            array_push($errors, "password should be at least 6 characters long");
        }

        if(empty($errors)){
            // complete registration

            $hashed_password = Helpers::hash_password($password);
            
            $data = [
                $name,
                $email,
                $hashed_password
            ];

            if(User::Create($data)){
                echo "$name has been registered successfully";
                exit ;
            }

        }
    }
}
