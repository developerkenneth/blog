<?php
require_once  "../Core/Config.php";
require_once ROOT."/Model/Post.php";
// setting the content type acceptable

header("Content-Type: application/json");

// Allow requests from any origin (CORS)
header("Access-Control-Allow-Origin: *");

// Define which HTTP methods are allowed
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");

// Define which headers are allowed from the client side
header("Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With");

if ($_SERVER['REQUEST_METHOD'] === "POST") {

    echo json_encode([
        'message' => " received",
        "data" => $_POST
    ]);
}

if ($_SERVER['REQUEST_METHOD'] === "GET") {
    $encoded_post = json_encode(Post::index());
    echo $encoded_post;
}
