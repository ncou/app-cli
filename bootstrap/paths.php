<?php

$rootPath = dirname(__DIR__, 1);

return [
    '@root'      => $rootPath,
    '@app'       => '@root/src/',
    '@config'    => '@root/config/',
    '@public'    => '@root/public/',
    '@resources' => '@root/resources/',
    '@vendor'    => '@root/vendor/',
    '@runtime'   => sys_get_temp_dir() . '/app-cli/',
    '@cache'     => sys_get_temp_dir() . '/app-cli/',
];
