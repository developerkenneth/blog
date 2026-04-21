<?php
require_once  "../Core/Config.php";
require_once ROOT . "/Model/Post.php";
require_once ROOT . "/Core/Helpers.php";
require_once ROOT . "/Core/Auth.php";

session_start();


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

    if (!Auth::is_logged_in()) {
        http_response_code(401);

        $response['error'] = "Unauthorized request.";
        $response['status'] = 401;

        echo json_encode($response);
        exit();
    }


    if (empty($_POST)) {

        http_response_code(400);

        $response['error'] = "POST cannot be empty";
        $response['status'] = 400;

        echo json_encode($response);
        exit();
    }

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
            http_response_code(201);
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

    // single post if user provides an id
    if (isset($_GET['id']) && empty($_GET['id']) === false) {
        $id = (int) $_GET['id'];
        $post = Post::find($id);

        if ($post) {

            echo json_encode([
                'message' => "post was found ",
                "post" => $post
            ]);
            exit();
        }

        echo json_encode([
            'message' => "post not found",
            'id' => $id
        ]);

        exit();
    }

    // if user provides a keyword we will

    if (isset($_GET['keyword']) && !empty($_GET['keyword'])) {
        http_response_code(202);
        $keyword =Helpers::sanitize_input(trim($_GET['keyword']));
        $encoded_post = json_encode(Post::search($keyword));
        echo $encoded_post;
        exit();
    }

    $encoded_post = json_encode(Post::index());
    echo $encoded_post;
    exit();
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


// updating a post
if ($_SERVER['REQUEST_METHOD'] === "PUT") {
    $response = [];
    $error = "";

    $raw_data = file_get_contents("php://input");
    $data = json_decode($raw_data, true);



    $title = Helpers::sanitize_input(trim($data['title']));
    $body = Helpers::sanitize_input(trim($data['body']));
    $category = Helpers::sanitize_input(trim($data['category']));
    $status = Helpers::sanitize_input(trim($data['status']));
    $id = Helpers::sanitize_input(trim($data['id']));

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
        'id' => $id
    ];




    try {



        if (Post::edit($post, $id)) {

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
