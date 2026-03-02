<?php

namespace App\Controller;

use Framework\Response;
use Framework\ResponseFactory;

class TaskController
{
    private ResponseFactory $responseFactory;

    public function __construct(ResponseFactory $responseFactory)
    {
        $this->responseFactory = $responseFactory;
    }

    public function index(ResponseFactory $responseFactory): Response
    {
        return $this->responseFactory->body('Dit Task/index');
    }

    public function create(ResponseFactory $responseFactory): Response
    {
        return $this->responseFactory->body('Dit Task/create');
    }
}
