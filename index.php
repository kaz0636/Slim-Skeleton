<?php

require __DIR__ . '/assets/src/functions.php';

if (PHP_SAPI == 'cli-server') {
    // To help the built-in PHP dev server, check if the request was actually for
    // something which should probably be served as a static file
    $excludeFile = [
        'adminer.php',
    ];

    $file = __DIR__ . $_SERVER['REQUEST_URI'];

    if (is_file($file) || strposa($file, $excludeFile)) {
        return false;
    }
}

require __DIR__ . '/vendor/autoload.php';

session_start();

// Instantiate the app
$settings = require __DIR__ . '/assets/src/settings.php';
$app = new \Slim\App($settings);

// Set up dependencies
require __DIR__ . '/assets/src/dependencies.php';

// Register middleware
require __DIR__ . '/assets/src/middleware.php';

// Register routes
require __DIR__ . '/assets/src/routes.php';

// Run app
$app->run();
