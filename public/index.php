<?php

/**
 * This makes our life easier when dealing with paths. Everything is relative
 * to the application root now.
 */
chdir(dirname(__DIR__));

// Decline static file requests back to the PHP built-in webserver
if (php_sapi_name() === 'cli-server') {
    $path = realpath(__DIR__ . parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
    if (__FILE__ !== $path && is_file($path)) {
        return false;
    }
    unset($path);
}

// Setup autoloading
require 'init_autoloader.php';
$_ENV["APPLICATION_ENV"] = 'dev';
$config = require 'config/application.config.php';
if ($_ENV["APPLICATION_ENV"] == 'dev') {

    error_reporting(E_ALL);
    ini_set('display_errors', TRUE);

    $config['modules'][] = 'ZendDeveloperTools';
}


// Run the application!
Zend\Mvc\Application::init($config)->run();


