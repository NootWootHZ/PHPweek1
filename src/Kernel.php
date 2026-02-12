<?php

namespace Framework;

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
}