<?php
session_start();
require_once("Core/Config.php");
require_once ROOT . "/Core/Auth.php";
require_once ROOT . "/Core/Helpers.php";
require_once ROOT . "/Model/User.php";

?>
<!doctype html>
<html>

<head>
  <title>Blog</title>

  <link rel="stylesheet" href="./assets/css/index.css" />

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap"
    rel="stylesheet" />

  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
</head>

<body>
  <header class="navbar">
    <h2>Blog Page</h2>

    <div id="menu-toggle">
      <i class="fas fa-bars"></i>
    </div>

    <a href="#" id="hell"> <i class="fas fa-home"></i> Home </a>
    <a href="#"> <i class="fas fa-pen"></i> Blog </a>
    <a href="#"> <i class="fas fa-tools"></i> Service </a>
    <a href="#"> <i class="fas fa-info-circle"></i> About </a>
    <a href="#"> <i class="fas fa-phone"></i> Contact </a>

    <div class="but">

      <?php if (Auth::is_logged_in()) : ?>
        <a href="dashboard.php" class="log">
          <i class="fas fa-sign-in-alt"></i>Dashboard
        </a>
      <?php else : ?>
        <a href="login.php" class="log">
          <i class="fas fa-sign-in-alt"></i> Log in
        </a>

        <a href="register.php" class="reg">
          <i class="fas fa-user-plus"></i> Sign up
        </a>
      <?php endif; ?>
    </div>
  </header>

  <section class="hero">
    <h1>Discover our latest news</h1>
    <p>Explore the latest posts and update</p>
  </section>

  <main class="container">
    <section class="posts">
      <h2>Recent Posts And Articles</h2>
      <div id="posts-container" class="posts-grid"></div>
    </section>

    <aside class="sidebar">
      <h3><i class="fas fa-star"></i> Featured</h3>
      <div id="featured-posts"></div>
    </aside>
  </main>

  <footer class="footer">
    <div class="footer-container">
      <div class="footer-section">
        <h3>Blog Page</h3>
        <p>Sharing ideas, stories, and updates with you.</p>
      </div>

      <div class="footer-section">
        <h4>Quick Links</h4>
        <a href="#">Home</a>
        <a href="#">Blog</a>
        <a href="#">About</a>
        <a href="#">Contact</a>
      </div>

      <div class="footer-section">
        <h4>Follow Us</h4>
        <a href="#"><i class="fab fa-facebook"></i> Facebook</a>
        <a href="#"><i class="fab fa-twitter"></i> Twitter</a>
        <a href="#"><i class="fab fa-instagram"></i> Instagram</a>
      </div>
    </div>

    <p class="footer-bottom">© 2026 Blog Page. All rights reserved.</p>
  </footer>

  <script src="assets/js/index.js"></script>
</body>

</html>