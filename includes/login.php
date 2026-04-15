<?php
require_once "Core/Config.php";
require_once CORE . "/Helpers.php";
require_once ROOT . "/Model/User.php";
require_once ROOT . "/Core/Auth.php";
session_start();

// takes in all the errors
$errors = [];




if ($_SERVER['REQUEST_METHOD'] === "POST") {


    $required_field = ['email', 'password'];
    foreach ($_POST as $key => $value) {
        if (in_array($key, $required_field) && empty($value)) {
            array_push($errors, "$key is required");
        }
    }

    if (count($errors) < 1) {


        $email = $_POST['email'];
        $password = $_POST['password'];

        if (Helpers::is_email($email) === false) {
            array_push($errors, "$email is not a valid email.");
        }

        if (User::find_by_email($email) === false) {
            array_push($errors, "invalid email or password");
        }


        if (empty($errors)) {
            // get users data
            $user_data = User::find("email", $email);
            $user_password = $user_data['password'];

            // verify password
            if (Helpers::verify_password($password, $user_password)) {
                if (Auth::login($user_data)) {
                    Helpers::redirect("dashboard.php?message=welcome back " . $user_data['name']);
                    exit();
                } else {
                    $errors[] = 'oops login failed... please try again later';
                }
            }else{
                $errors[] = "invalid email or password";
            }
        }
    }
}
