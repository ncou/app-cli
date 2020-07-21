<?php

declare(strict_types=1);

return [
    'dispatchers' => [
        Chiron\Dispatcher\ConsoleDispatcher::class,
        Chiron\Dispatcher\SapiDispatcher::class,
        Chiron\Dispatcher\RrDispatcher::class,
    ],
    'providers' => [],
    'bootloaders' => [],
];
