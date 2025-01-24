<?php

$config = require base_path('config.php');
$db = new Database($config['database']);

$currentUser = 3;

$id = $_GET['id'];

$note = $db->query('Select * from notes where id = :id', ['id' => $id])->find();


if (!$note) {
    abort();
}
//dd($note['user_id']);
authorize(trim(($note['user_id'] === $currentUser)));



require view("notes/show.view.php", [
    "heading" => "Note",
    "note" => $note
]);
