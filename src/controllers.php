<?php

use Docs\Controllers\DocsController;
use Docs\Controllers\HealthController;

$app->get('/health', HealthController::class . '::getAction');

$app->get('/api.yml', DocsController::class . '::getAction');
