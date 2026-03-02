<?php

namespace App\Views;

use Exception;
use App\Controller\HomeController;
use Framework\RouteProviderInterface;
use Framework\Router;
use Framework\ServiceContainer;
use App\Controller\TaskController;

class RouteProvider implements RouteProviderInterface
{
    /**
     * @throws Exception
     */
    public function register(Router $router, ServiceContainer $container): void
    {
        /** @var HomeController $homeController */
        $homeController = $container->get(HomeController::class);

        $router->addRoute('GET', '/', function () use ($homeController) {
            return $homeController->index();
        });

        $router->addRoute('GET', '/about', function () use ($homeController) {
            return $homeController->about();
        });

        $taskController = $container->get(TaskController::class);
        $router->addRoute('GET', '/task', [$taskController, "index"]);
    }
}
