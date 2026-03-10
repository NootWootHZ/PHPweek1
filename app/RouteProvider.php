<?php

namespace App;

use App\Controller\HomeController;
use App\Controller\TaskController;
use Exception;
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

        $router->addRoute('GET', '/', function () use ($homeController) {
            return $homeController->index();
        });

        $router->addRoute('GET', '/about', function () use ($homeController) {
            return $homeController->about();
        });

        $taskController = $container->get(TaskController::class);
        $router->addRoute('GET', '/task', function () use ($taskController) {
            return $taskController->index();
        });
    }
}
