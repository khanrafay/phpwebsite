<?php


$config = require base_path('config.php');
$db = new Database($config['database']);


$notes = $db->query(('Select * from notes'))->findAll();




require view(
    "notes/index.view.php",
    [
        "heading" => "Notes",
        "notes" => $notes
    ]
);
