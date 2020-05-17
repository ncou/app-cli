<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

$app = Chiron\Application::init();

/*
$app = Chiron\Application::init([
    'root' => __DIR__,
]);
*/

$app->start();
