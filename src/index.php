<?php
require_once dirname(__DIR__)."/vendor/autoload.php";

use GuzzleHttp\Client;

$client = new Client([
    // Base URI is used with relative requests
    'base_uri' => 'https://dummyjson.com',
    // You can set any number of default request options.
    'timeout'  => 2.0,
]);


// sebding mails in php
// mail("developerkenneth9696@gmail.com", "getting ready for ...", "hi dear, bllbblblbbllblb");

$response = $client->request('GET', '/products');
var_dump($response->getBody()->getContents());