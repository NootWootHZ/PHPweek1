<?php

namespace Framework;

use App\Views\ServiceProvider;
use Exception;

class Kernel
{
    public Router $router;

    private ServiceContainer $container;

    public function __construct()
    {
        $this->router = new Router();
        $this->container = new ServiceContainer();
    }

    public function handle(Request $request): Response
    {
        return $this->router->dispatch($request);
    }

    public function getRouter(): Router
    {
        return $this->router;
    }

    public function registerRoutes(RouteProviderInterface $routeProvider): void
    {
        $routeProvider->register($this->router, $this->container);
    }

    /**
     * @throws Exception
     */
    public function registerServices(Serviceprovider $serviceProvider): void
    {
        $serviceProvider->register($this->container);
    }
}
