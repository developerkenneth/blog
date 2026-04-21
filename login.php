<?php

require_once "Core/Config.php";
require_once ROOT . "/Core/Helpers.php";
include_once  ROOT . "/includes/login.php";
require_once ROOT. "/Core/Auth.php";

Auth::loggout_redirect();

if (!isset($_SESSION['csrf_token']) && empty($_SESSION['csrf_token'])) {
  Helpers::csrf_token();
}

?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="assets/css/guest.css">
  <title>Login to My Blog</title>
</head>

<body>
  <main>
    <div class="image-container">
      <img class="cover-image" src="assets/img/creator.jpg" alt="creators" />

      <div class="desc-cover">
        <div class="brand-container">
          <h1 class="brand">Blog</h1>
        </div>

        <div class="description">
          <h1>Login With Us</h1>

          <p>
            Welcome Back! Kindly fill in the correct details.
          </p>
        </div>
      </div>
    </div>

    <div class="form-section">
      <div class="form-container">

        <div class="form-header">
          <h1>Welcome Back!</h1>
          <p> Enter your correct email and password to sign in</p>
        </div>

        <?php if (empty($errors) === false) : ?>
          <div class="errors">
            <ul>
              <?php
              foreach ($errors as $error) {
                echo "<li>$error</li>";
              }
              ?>
            </ul>
          </div>
        <?php endif; ?>

        <form action="" method="post">
          <div class="form-input">
            <label for="">Email *</label>
            <input type="text" name="email" value="<?= Helpers::old("email") ?>" placeholder="john@gmail.com" required>
          </div>

          <div class="form-input">
            <label for="">Password *</label>
            <input type="password" name="password" placeholder="******" required>
          </div>

          <input type="hidden" name="csrf_token" value="<?= $_SESSION['csrf_token']; ?>">

          <div class="form-input">
            <button type="submit">Login</button>
          </div>
        </form>


      </div>
    </div>
  </main>
</body>

</html>