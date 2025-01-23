<?php

$heading = "My Notes";

$config = require 'config.php';
$db = new Database($config['database']);


$notes = $db->query(('Select * from notes'))->findAll();






require "views/notes/index.view.php";
