<?php

namespace App\Controller;

use Framework\Response;
use Framework\ResponseFactory;
use Exception;

class TaskController
{
    private ResponseFactory $responseFactory;

    public function __construct(ResponseFactory $responseFactory)
    {
        $this->responseFactory = $responseFactory;
    }

    public function index(): Response
    {
        return $this->responseFactory->view('task.html.twig', [
            'navigation' => [
                array('caption' => 'Aboutmyguy', 'href' => '/about'),
                array('caption' => 'Tasksmywigga', 'href' => '/task'),
            ]
        ]);
    }

    public function create(ResponseFactory $responseFactory): Response
    {
        return $this->responseFactory->body('Dit Task/create');
    }
}
