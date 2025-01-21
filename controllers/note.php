<?php

$heading = "My Notes";

$config = require 'config.php';
$db = new Database($config['database']);

$currentUser = 3;

$id = $_GET['id'];
$note = $db->query('Select * from notes where id = :id', ['id' => $id])->fetch();

if ($note['user_id'] !== $currentUser) {
    abort(Response::FORBIDDEN);
}


require "views/note.view.php";
