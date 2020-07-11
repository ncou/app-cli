<?php

declare(strict_types=1);

$autoload = __DIR__ . '/vendor/autoload.php';

if (! is_file($autoload)) {
    die('You need to set up the project dependencies using Composer.');
}

require_once $autoload;

$paths = require_once __DIR__ . '/config/paths.php';

$app = Chiron\Application::init($paths);
$app->run();