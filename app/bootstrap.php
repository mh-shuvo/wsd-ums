<?php
require_once 'config/config.php';

if(ERROR_REPORTING){
    // error_reporting(E_ERROR | E_PARSE);
    error_reporting(E_ALL);
}

spl_autoload_register(function ($class) {
    $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);

    // Core Libraries
    $coreFile = __DIR__ . '/libraries/' . $class . '.php';
    if (file_exists($coreFile)) {
        require $coreFile;
        return;
    }

    // Middleware
    $middlewareFile = __DIR__ . '/middleware/' . $class . '.php';
    if (file_exists($middlewareFile)) {
        require $middlewareFile;
        return;
    }

    // Interfaces
    $interfaceFile = __DIR__ . '/interfaces/' . $class . '.php';
    if (file_exists($interfaceFile)) {
        require $interfaceFile;
        return;
    }
});
Session::start();