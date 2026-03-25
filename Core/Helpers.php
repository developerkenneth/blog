<?php

class Helpers
{
    public static function sanitize_input($input)
    {
        return trim(htmlspecialchars($input));
    }

    public static function is_email($input)
    {
        return filter_var($input, FILTER_VALIDATE_EMAIL) ? true : false;
    }

    public static function old($field)
    {
        if ($_SERVER['REQUEST_METHOD'] === "POST") {
            return isset($_POST[$field]) ? $_POST[$field] : "";
        } else if ($_SERVER['REQUEST_METHOD'] === "GET") {
            return isset($_GET[$field]) ? $_GET[$field] : "";
        }
    }

    public static function hash_password($password_string)
    {
        return password_hash($password_string, PASSWORD_DEFAULT);
    }
    public static function verify_password($password_string, $hashed_password) {
        return password_verify($password_string, $hashed_password);
    }
}
