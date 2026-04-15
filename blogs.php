<?php
session_start();
require_once("Core/Config.php");
require_once ROOT . "/Core/Auth.php";
require_once ROOT . "/Core/Helpers.php";
require_once ROOT . "/Model/User.php";
require_once ROOT . "/Model/Post.php";


Auth::login_redirect();
//gives us user details

$user = Auth::user();

// for messages sent using url
$message = "";
if (isset($_GET['message']) && !empty($_GET['message'])) {
    $message = Helpers::sanitize_input($_GET['message']);
}

// always define page title
$page_title = "Blog Posts";


// fetch all post
$posts = Post::index();
$all_Post_count = count($posts);


?>

<?php include_once ROOT . "/views/components/header.php" ?>
<!-- build a dashboard show all users page and admin dashboard. -->
<!-- create a branch and make sure to put the work in a template. -->

<!-- nav bar should be here -->
<?php include_once ROOT . "/views/components/nav.php" ?>

<div class="container">

    <style>
        .edit {
            text-decoration: none;
            background-color: #4893f0;
            padding: 5px 10px;
            color: #fff;
        }

        .del {
            text-decoration: none;
            background-color: crimson;
            padding: 5px 10px;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        .action {
            display: flex;
            justify-content: space-between;
            gap: 5px;
        }
    </style>

    <!-- side bar should be here -->
    <?php include_once ROOT . "/views/components/sidebar.php" ?>



    <div class="main">
        <h1>Blogs</h1>

        <div class="cards">
            <div class="card">
                <h3>Total Posts</h3>
                <p id="totalPosts"><?= $all_Post_count ?></p>
            </div>
        </div>

        <!-- table to show all post -->
        <table>

            <thead>
                <tr>
                    <th>#id</th>
                    <th>Title</th>
                    <th>Body</th>
                    <th>Author</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>

            <?php if (count($posts) > 1): ?>

                <tbody>

                    <?php foreach ($posts as $post) : ?>
                        <tr>
                            <td><?= $post['id'] ?></td>
                            <td><?= $post['title'] ?></td>
                            <td><?= $post['body'] ?></td>
                            <td><?= $post['author'] ?></td>
                            <td><?= $post['created_at'] ?></td>
                            <td><?= $post['status'] ?></td>
                            <td class="action">
                                <button data-id="<?= $post['id'] ?>" class="del">
                                    delete
                                </button>

                                <a href="post_edit.php?id=<?= $post['id'] ?>" class="edit">edit</a>
                            </td>
                        </tr>

                    <?php endforeach; ?>
                </tbody>

            <?php else : ?>

                <p>NO POST FOUND</p>

            <?php endif; ?>
        </table>

    </div>





</div>




<!-- footer should be here -->
 <script src="./assets/js/del.js"></script>
<?php include_once ROOT . "/views/components/footer.php" ?>