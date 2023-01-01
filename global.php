<?php

require __DIR__ . '/vendor/autoload.php';

use Dotenv\Dotenv;

$environment = Dotenv::createImmutable(__DIR__);
$environment->load();