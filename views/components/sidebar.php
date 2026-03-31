<!-- side bar -->
<?php

function get_active($script){
        if(basename($_SERVER['SCRIPT_NAME']) === $script){
            return "active";
        }
}

?>
<div class="sidebar">
    <a href="dashboard.php" class="<?= get_active("dashboard.php"); ?>">Dashboard</a>

    <?php if($user['user_type'] === 1) : ?>
    <a href="users.php"  class="<?= get_active("users.php"); ?>" >Users</a>
    <?php endif; ?>
    <a href="logout.php">Logout</a>

</div>