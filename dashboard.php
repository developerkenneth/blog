<?php
session_start();
require_once("Core/Config.php");
require_once ROOT . "/Core/Auth.php";
require_once ROOT . "/Core/Helpers.php";

Auth::login_redirect();
//gives us user details
$user = Auth::user();
$message = "";
if (isset($_GET['message']) && !empty($_GET['message'])) {
    $message = Helpers::sanitize_input($_GET['message']);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/dashboard.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">

    <title>Dashboard</title>
</head>

<body>
    <!-- build a dashboard show all users page and admin dashboard. -->
    <!-- create a branch and make sure to put the work in a template. -->

    <div class="navbar">
        <h2>Admin Dashboard</h2>
        <p>Welcome <?= $user['name'] ?> </p>
    </div>

    <div class="container">
        <div class="sidebar">
            <a href="dashboard.php" class="active">Dashboard</a>
            <a href="users.php">Users</a>
            <a href="logout.php">Logout</a>

        </div>

        <div class="main">
            <h1>Dashboards</h1>

            <div class="cards">
                <div class="card">
                    <h3>Total Users</h3>
                    <p id="totalUsers">0</p>
                </div>
            </div>
        </div>
    </div>


    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <script src="assets/js/app.js"></script>
    <script>
        // cleans the url parameters when done
        const cleanUrl = window.location.protocol + "//" + window.location.host + window.location.pathname;
        window.history.replaceState({}, document.title, cleanUrl);
        const message = "<?= $message ?>";
        if (message.length >= 1) {
            showNotification(message);
        }
    </script>
</body>

</html>