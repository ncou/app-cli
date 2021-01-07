<?php

declare(strict_types=1);

require __DIR__ . '/vendor/autoload.php';

$paths = require __DIR__ . '/bootstrap/paths.php';
$app = Chiron\Application::init($paths);

exit($app->run());
