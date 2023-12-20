<?php
use Controllers\HomeController;

$routes = [
    '/' => HomeController::class . '@index',
    '/dashboard' => HomeController::class . '@dashboard'
];

return $routes;
