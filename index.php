<?php

require __DIR__ . '/vendor/autoload.php';

use Routes\Route;
use Dotenv\Dotenv;

$dotEnv = Dotenv::createImmutable(__DIR__);
$dotEnv->load();

$requestUri = $_SERVER['REQUEST_URI'];

$router = new Route();
$router->run($requestUri);
