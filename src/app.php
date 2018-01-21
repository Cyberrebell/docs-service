<?php

use Docs\Service\Merger\OpenApiDocsServiceProvider;
use Silex\Application;
use Silex\Provider\AssetServiceProvider;
use Silex\Provider\HttpFragmentServiceProvider;
use Silex\Provider\ServiceControllerServiceProvider;

$app = new Application();
require __DIR__ . '/error.php';
require __DIR__ . '/logger.php';

$app->register(new ServiceControllerServiceProvider());
$app->register(new AssetServiceProvider());
$app->register(new HttpFragmentServiceProvider());
$app->register(new OpenApiDocsServiceProvider());

return $app;
