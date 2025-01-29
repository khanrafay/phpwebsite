<?php


use Core\Database;
use Core\Validator;

require base_path("/Core/Validator.php");
$config = require base_path('config.php');

$db = new Database($config['database']);
$errors = [];



if (!Validator::validateString($_POST['body'], 1, 1000)) {
    $errors['body'] = 'Must be between 1 and 1000 characters';
}

if (!empty($errors)) {
    return  view("notes/create.view.php", [
        "heading" => "Create a Note",
        "errors" => $errors ?? []
    ]);
}


$db->query('INSERT INTO notes(body, user_id) VALUES(:body, :user_id)', [
    ':body' => $_POST['body'],
    ':user_id' => 3
]);


header('Location: /notes');
exit();
