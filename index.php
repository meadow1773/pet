<?php

require __DIR__ . '/global.php';

use Routes\Route;

$requestUri = $_SERVER['REQUEST_URI'];

$router = new Route();
$router->run($requestUri);
