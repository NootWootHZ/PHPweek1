<?php

namespace Framework;

use App\Controller\RouteProvider;

class Kernel
{

    public Router $router;

    public function __construct()
    {
        $this->router = new Router();
    }

    public function handle(Request $request): Response
    {
        return $this->router->dispatch($request);
    }

    public function getRouter(): Router {
        return $this->router;
    }

    public function registerRoutes(RouteProvider $routeProvider): void {
        $routeProvider->register($this->router);
    }
}
