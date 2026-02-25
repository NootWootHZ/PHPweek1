<?php

namespace App\Views;

use Exception;
use App\Controller\HomeController;
use Framework\RouteProviderInterface;
use Framework\Router;
use Framework\ServiceContainer;

class RouteProvider implements RouteProviderInterface
{
    /**
     * @throws Exception
     */
    public function register(Router $router, ServiceContainer $container): void
    {
        /** @var HomeController $homeController */
        $homeController = $container->get(HomeController::class);

        $router->addRoute('GET', '/', [$homeController, "index"]);
        $router->addRoute('GET', '/about', [$homeController, "about"]);
    }
}
