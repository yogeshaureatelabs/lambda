<?php

require_once __DIR__ . '/app/config.php';
require_once __DIR__ . '/src/autoload.php';

use Core\Request;

$request = new Request($_SERVER, $_POST, $_GET, $_FILES);

try {

    $controller = $request->getController();
    $method = $request->getMethod($controller);

    $controller = new $controller;
    $controller->setRequest($request);

    echo $controller->$method();

} catch (Exception $e) {
    echo sprintf(
        '<h3>%s</h3><h4>%s</h4><h5>%s:%s</h5>',
        $e->getCode(),
        $e->getMessage(),
        $e->getFile(),
        $e->getLine()
    );
}
