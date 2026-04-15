<?php
session_start();
require_once("Core/Config.php");
require_once ROOT . "/Core/Auth.php";
require_once ROOT . "/Core/Helpers.php";
require_once ROOT . "/Model/User.php";

Auth::login_redirect();
//gives us user details
$user = Auth::user();
$message = "";
if (isset($_GET['message']) && !empty($_GET['message'])) {
    $message = Helpers::sanitize_input($_GET['message']);
}

// always define page title
$page_title = "Dashboard";


// fetch all post

// fetch all users
$total_users = User::total_users_count();


?>

<?php include_once ROOT . "/views/components/header.php" ?>
<!-- build a dashboard show all users page and admin dashboard. -->
<!-- create a branch and make sure to put the work in a template. -->

<!-- nav bar should be here -->
<?php include_once ROOT . "/views/components/nav.php" ?>

<div class="container">

    <!-- side bar should be here -->
    <?php include_once ROOT . "/views/components/sidebar.php" ?>



    <div class="main">
        <h1>Dashboards</h1>

        <div class="cards">
            <div class="card">
                <h3>Total Users</h3>
                <p id="totalUsers"><?= $total_users; ?></p>
            </div>

            <div class="card">
                <h3>Total Posts</h3>
                <p id="totalPosts">0</p>
            </div>
        </div>

    </div>
</div>



<!-- footer should be here -->
<?php include_once ROOT . "/views/components/footer.php" ?>