<?php
// Connect to the database
$connection = new PDO("mysql:host=localhost;dbname=blog_flatphp", 'root', '');

// Retrieve results
$result = $connection->query('SELECT id, post_title FROM post');

// Put all results in array
$posts = [];
while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    $posts[] = $row;
}

$connection = null;

// include the HTML presentation code
require 'templates/post_list.php';