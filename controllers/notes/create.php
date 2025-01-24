<?php

require base_path("Validator.php");
$config = require base_path('config.php');

$db = new Database($config['database']);
$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {




    if (!Validator::validateString($_POST['body'], 1, 1000)) {
        $errors['body'] = 'Must be between 1 and 1000 characters';
    }



    if (empty($errors)) {
        $db->query('INSERT INTO notes(body, user_id) VALUES(:body, :user_id)', [
            ':body' => $_POST['body'],
            ':user_id' => 3
        ]);
    }
}

require view("notes/create.view.php", [
    "heading" => "Create a Note",
    "errors" => $errors
]);
