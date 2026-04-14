
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


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blog Post</title>

  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
  <link rel="stylesheet" href="./assets/css/add-blog.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body>
  <form id="form" action="" method="get" enctype="multipart/form-data">
    <div class="topBar">
      <div class="left">
        <button onclick="history.back()" type="button" id="back">Go Back</button>

        <span>Create Post</span>
      </div>

      <ul>
        <li><button type="submit">Save</button></li>

      </ul>

    </div>

    <div class="bodyContent">
      <h2>Enter Post Title</h2>
      <textarea name="title" id=""></textarea>
      <div id="imagePreview"></div>


      <h2>Enter Post Body</h2>
      <textarea name="body" id=""></textarea>
      <div id="imagePreview"></div>

      <p class="error"> </p>
    </div>



    <div>
      <div action="" id="sideBar">
        <label>Topics:</label>
        <select name="category">
          <option>Web Development</option>
          <option>Graphic Design</option>
          <option>Nigeria Economy</option>
          <option>Student Welfare</option>
        </select>

        <label>Featured Image:</label>


        <div class="outline-file">
          <label for="fileUpload" class="upload-label">
            <i class="fa fa-image"></i>
            <span>Click to upload</span>
          </label>
          <input type="file" name="featured_image" id="fileUpload">
        </div>

        <label>Status:</label>
        <select name="status">
          <option value="draft">Draft</option>
        </select>

      </div>


    </div>


  </form>
  <script src="./assets/js/add-bog.js" type="module"></script>
</body>

</html>