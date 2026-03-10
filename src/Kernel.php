<?php

namespace Framework;

use Exception;

class Kernel
{
    public Router $router;

    private ServiceContainer $container;

    public function __construct()
    {
        $this->container = new ServiceContainer();
        $this->container->set(ResponseFactory::class, new ResponseFactory());

        $responseFactory = $this->container->get(ResponseFactory::class);
        $this->router = new Router($responseFactory);
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
        $routeProvider->register($this->getRouter(), $this->container);
    }

    /**
     * @throws Exception
     */
    public function registerServices(ServiceProviderInterface $serviceProvider): void
    {
        $serviceProvider->register($this->container);
    }
}
