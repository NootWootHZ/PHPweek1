<?php

namespace Framework;

class Router
{
    public array $routes;

    public function __construct() {
        $this->routes = [];
    }

    public function dispatch(Request $request): Response {
        foreach ($this->routes as $route) {
            if ($route->path === $request->path) {
                $matchedRoute = $route;
            }
        }
        if (!isset($matchedRoute)) {
            return new Response(404, 'Not Found', null);
        }

        return new Response(200, $matchedRoute->return, null);
    }

    public function addRoute(string $method, string $path, string $return): void {
        $this->routes[] = new Route($method, $path, $return);
    }
}