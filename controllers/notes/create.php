<?php

require "Validator.php";
$config = require 'config.php';

$db = new Database($config['database']);

$heading = "Create a Note";



if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $errors = [];


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

require 'views/notes/create.view.php';
