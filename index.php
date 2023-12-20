<?php

require_once (__DIR__.'/app/controllers/HomeController.php');
$routes = require_once (__DIR__.'/routes/web.php');

function dispatch(): void
{
    global $routes;

    $path = $_SERVER['REQUEST_URI'];

    if (array_key_exists($path, $routes)) {
        $routeParts = explode('@', $routes[$path]);
        $controllerName = $routeParts[0];
        $methodName = $routeParts[1];

        // Autoload ou require_once do arquivo do controlador se necessário

        $controller = new $controllerName();
        $controller->$methodName();
    } else {
        http_response_code(404);
        echo 'Página Não Encontrada';
    }
}

dispatch();
