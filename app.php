<?php

declare(strict_types=1);

$currentDir = __DIR__;

require $currentDir . '/bootstrap/requirements.php';
require $currentDir . '/vendor/autoload.php';

$paths = require $currentDir . '/bootstrap/paths.php';
$app = Chiron\Application::init($paths);

exit($app->run());
