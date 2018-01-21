<?php

use Symfony\Component\Console\Application;

$console = new Application('docs-service', 'n/a');
$console->setDispatcher($app['dispatcher']);

$console
    ->register('update-swagger-ui')
    ->setDescription('Dev-tool to load the latest swagger-ui version to the project')
    ->setCode(function () use ($app) {

    })
;

return $console;
