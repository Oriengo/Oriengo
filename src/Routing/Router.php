<?php

namespace Oriengo\Routing;

class Router
{
    protected $routes = [];

    public function get(string $uri, callable $callback)
    {
        $this->routes['GET'][$uri] = $callback;
    }

    public function post(string $uri, callable $callback)
    {
        $this->routes['POST'][$uri] = $callback;
    }

    public function dispatch(string $method, string $uri)
    {
        $uri = strtok($uri, '?'); // Remove query string
        $callback = $this->routes[$method][$uri] ?? null;

        if ($callback) {
            return call_user_func($callback);
        }

        http_response_code(404);
        echo "404 Not Found: $uri";
    }
}
