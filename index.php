<?php

use App\Bootstrap\AppManager;
use DI\ContainerBuilder;
use Dotenv\Dotenv;

require __DIR__ . '/app/vendor/autoload.php';

// Ensure cache can be cleared
umask(0002);

// Set file access restrictions
ini_set('open_basedir', __DIR__ . ':' . realpath(__DIR__ . '/../../shared/'));

// Initialize environment variable handler
Dotenv::createUnsafeImmutable(__DIR__)->safeLoad();

// Initialize the container
$container = (new ContainerBuilder)->addDefinitions(
    ...glob(__DIR__ . '/app/config/*.php')
);

// Compile the container
if (! filter_var(getenv('APP_DEBUG'), FILTER_VALIDATE_BOOL)) {
    $container->enableCompilation(__DIR__ . '/app/cache');
}

// Initialize the application
$app = $container->build()->call(AppManager::class);

// Engage!
$app->run();
