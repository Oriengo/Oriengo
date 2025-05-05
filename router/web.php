<?php

use Oriengo\Routing\Router;

$router = new Router();

$router->get('/', function () {
    echo "<h1>Welcome to Oriengo Framework</h1>";
});

$router->get('/about', function () {
    echo "<h1>About Oriengo</h1>";
});

return $router;
