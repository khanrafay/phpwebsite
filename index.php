

<?php
require "functions.php";

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

// dd($uri);
$routes = [
    '/' => 'controllers/index.php',
    '/about' => 'controllers/about.php',
    '/contact' => 'controllers/contact.php',
    '/mission' => 'controllers/mission.php',
];


if (array_key_exists($uri, $routes)) {
    require  $routes[$uri];
}
