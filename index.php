

<?php
require "functions.php";
require "Database.php";
require "Response.php";
require "router.php";

//Connect databse and execute query

$config = require 'config.php';

$db = new Database($config['database']);

$id = $_GET['id'];

$query = "SELECT * FROM users where id = :id";


$posts = $db->query($query, [':id' => $id])->fetchAll();


// dd($posts);
// foreach ($posts as $post) {
//     echo "<li>" . $post['title'] . "</li>";
// }
