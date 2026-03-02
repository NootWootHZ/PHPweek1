<?php

namespace App\Controller;

use Framework\Response;
use Framework\ResponseFactory;

class HomeController
{

    private ResponseFactory $responseFactory;

    public function __construct(ResponseFactory $responseFactory)
    {
        $this->responseFactory = $responseFactory;
    }

    public function index(): Response
    {
        return $this->responseFactory->body('Dit is de Homecontroller/Index');
    }

    public function about(): Response
    {
        return $this->responseFactory->body('Dit is HomeController/about');
    }
}
