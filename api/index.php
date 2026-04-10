<?php
require_once  "../Core/Config.php";
require_once ROOT . "/Model/Post.php";
// setting the content type acceptable

header("Content-Type: application/json");

// Allow requests from any origin (CORS)
header("Access-Control-Allow-Origin: *");

// Define which HTTP methods are allowed
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");

// Define which headers are allowed from the client side
header("Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With");

// create new posts
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $response = [];
    $error = "";

    $title = trim($_POST['title']);
    $body = trim($_POST['body']);
    $category = trim($_POST['category']);
    $status = trim($_POST['status']);

    // checking if body and title fields are empty
    if (empty($title) || empty($body)) {
        $error = "title and body field is required ";
        $response['error'] = $error;
        echo json_encode($response);
        exit();
    }

    $post = [
        'title' => $title,
        'body' => $body,
        'status' => $status,
        'author' => 'John Doe'
    ];



    try {

        if (Post::create($post)) {

            echo json_encode([
                "success" => "post successful",
                "data" => $post
            ]);
            exit;
        } else {
            $response['error'] = "oops failed to upload";
            echo json_encode($response);
            exit;
        }
    } catch (Exception $e) {
        echo json_encode($e->getMessage());
    }
}

// get all posts
if ($_SERVER['REQUEST_METHOD'] === "GET") {

    $encoded_post = json_encode(Post::index());
    echo $encoded_post;
}


// delete post
if ($_SERVER['REQUEST_METHOD'] === "DELETE") {
    if (isset($_GET['id']) && !empty($_GET['id'])) {
        $id = (int) $_GET['id'];

        try {
            if (Post::delete($id)) {
                echo json_encode([
                    "id" => $id,
                    "message" => "post successfully deleted"
                ]);
                exit;
            } else {

                echo json_encode([
                    "message" => "oops something went wrong"
                ]);
                exit;
            }
        } catch (Exception $error) {
            echo json_encode([
                "message" => $error->getMessage()
            ]);
            exit;
        }
    }
}
