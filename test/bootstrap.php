<?php

include __DIR__ . '/../vendor/autoload.php';

if (!defined('HHVM_VERSION')) {
    $kernel = \AspectMock\Kernel::getInstance();
    $kernel->init([
        'debug' => true,
        'includePaths' => [__DIR__ . '/../src']
    ]);
}

