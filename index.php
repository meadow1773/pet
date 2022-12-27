<?php

require __DIR__ . '/vendor/autoload.php';

$dotEnv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotEnv->load();

use Routes\Route;

$requestUri = $_SERVER['REQUEST_URI'];

$router = new Route();
$router->run($requestUri);
