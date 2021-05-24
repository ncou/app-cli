<?php

declare(strict_types=1);

require __DIR__ . '/vendor/autoload.php';

Chiron\Debug\Debugger::enable();

$paths = require __DIR__ . '/bootstrap/paths.php';
$app = new Chiron\Application($paths);

exit($app->start());
