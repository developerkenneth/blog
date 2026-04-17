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
$page_title = "Edit Profile";



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
        <h1>Edit Profile</h1>

        <!-- create profile edit form here use dashboard.css to implement it -->

    </div>
</div>



<!-- footer should be here -->
<?php include_once ROOT . "/views/components/footer.php" ?>