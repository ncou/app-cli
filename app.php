<?php

declare(strict_types=1);

require __DIR__ . '/vendor/autoload.php';

Chiron\Debug\Debug::enable();

$paths = require __DIR__ . '/bootstrap/paths.php';
$app = Chiron\Application::init($paths);

exit($app->run());
