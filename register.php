<?php
require_once "Core/Config.php";
include_once  ROOT . "/includes/register.php";

?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="assets/css/guest.css">
  <title>Register to My Blog</title>
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
          <h1>Register With Us</h1>

          <p>
            Sign up with us and get to be updated with all that is happening
            in the world
          </p>
        </div>
      </div>
    </div>

    <div class="form-section">
      <div class="form-container">

        <div class="form-header">
          <h1>Register Now</h1>
          <p>Register now with us and be well informed</p>
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
            <input  type="text" name="email" value="<?= Helpers::old("email") ?>" placeholder="john@gmail.com" required>
          </div>


          <div class="form-input">
            <label for="">Name *</label>
            <input type="text" name="name" value="<?= Helpers::old("name") ?>" placeholder="john doe" required >
          </div>


          <div class="form-input">
            <label for="">Password *</label>
            <input type="password" name="password" placeholder="******" required >
          </div>

          <div class="form-input">
            <label for="">Repeat Password *</label>
            <input type="password" name="password_again" placeholder="******" required>
          </div>

          <div class="form-input">
            <button type="submit">Register</button>
          </div>
        </form>


      </div>
    </div>
  </main>
</body>

</html>