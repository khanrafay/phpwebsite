<?php

use Core\Database;

$config = require base_path('config.php');
$db = new Database($config['database']);

$currentUser = 3;


$note = $db->query('Select * from notes where id = :id', ['id' => $_POST['id']])->find();

authorize($note['user_id'] != $currentUser);

$db->query('DELETE FROM notes WHERE id = :id', ['id' => $_POST['id']]);
header('Location: /notes');
exit();



require view("notes/show.view.php", [
    "heading" => "Note",
    "note" => $note
]);
