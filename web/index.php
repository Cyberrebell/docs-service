<?php
error_reporting(E_ALL);
ini_set('display_errors', 0);

require_once __DIR__ . '/../vendor/autoload.php';

$app = require __DIR__ . '/../src/app.php';
require __DIR__ . '/../config/config.php';
require __DIR__ . '/../src/controllers.php';
$app->run();
