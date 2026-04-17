<?php
session_start();
require_once("Core/Config.php");
require_once ROOT . "/Core/Auth.php";
require_once ROOT . "/Core/Helpers.php";
require_once ROOT . "/Model/User.php";

require_once ROOT . "/includes/change_password.php";

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
        <h1>Change Password</h1>

        <?php if(empty($errors) === false){
            print_r($errors);
        } ?>
        <div class="kenneth-container">
        <div class="form-container">
            <form action="" method="post">

                <!-- for the current password -->
                <div class="form-group">
                    <label for="current_password"> Current Password</label>
                    <input type="password" name="current_password" placeholder="* * * * *">
                </div>

                <!-- new password -->
                <div class="form-group">
                    <label for="new_password"> New Password</label>
                    <input type="password" name="new_password" placeholder="* * * * *">
                </div>

                <!-- password confirm -->
                <div class="form-group">
                    <label for="password_confirm"> Confirm Password</label>
                    <input type="password" name="password_confirm" placeholder="* * * * *">
                </div>

                <div class="form-group">
                    <button class="btn" type="submit">Change Password</button>
                </div>


            </form>
        </div>

        </div>


    </div>
</div>



<!-- footer should be here -->
<?php include_once ROOT . "/views/components/footer.php" ?>