<?php
$errors = [];

$users_data = Auth::user();

if ($_SERVER['REQUEST_METHOD'] === "POST") {

    $current_password = trim(Helpers::sanitize_input($_POST['current_password']));
    $new_password = trim(Helpers::sanitize_input($_POST['new_password']));
    $password_confirm = trim(Helpers::sanitize_input($_POST['password_confirm']));

    if (empty($current_password) || empty($new_password) || empty($password_confirm)) {
        $errors[] = "all fields are required";
    }

    if (password_verify($current_password, $users_data['password']) === false) {
        $errors[] = "current password is not correct";
    }

    if ($new_password !== $password_confirm) {
        $errors[] = "password does not match";
    }

    if (empty($errors)) {

        // change password
        if (User::change_password($new_password, $users_data['id'])):
            Helpers::redirect("dashboard.php?message=password has been changed successfully");
            exit;
        endif;

        $errors[]= "oops failed to change password, please try again";
    }
}
