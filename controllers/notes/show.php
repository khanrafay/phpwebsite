<?php

$heading = "My Notes";

$config = require 'config.php';
$db = new Database($config['database']);

$currentUser = 3;

$id = $_GET['id'];

$note = $db->query('Select * from notes where id = :id', ['id' => $id])->find();


if (!$note) {
    abort();
}

authorize(($note['user_id'] === $currentUser));



require "views/notes/show.view.php";
