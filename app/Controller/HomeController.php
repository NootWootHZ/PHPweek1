<?php

namespace App\Controller;

use Exception;
use Framework\Response;
use Framework\ResponseFactory;

class HomeController
{

    private ResponseFactory $responseFactory;

    public function __construct(ResponseFactory $responseFactory)
    {
        $this->responseFactory = $responseFactory;
    }

    /**
     * @return Response
     * @throws Exception
     */
    public function index(): Response
    {
        return $this->responseFactory->view('home.html.twig', [
            'navigation' => [
                array('caption' => 'zuigmepik', 'href' => '/about'),
                array('caption' => 'pangpang', 'href' => '/task'),
            ]
        ]);
    }

    /**
     * @return Response
     * @throws Exception
     */
    public function about(): Response
    {
        return $this->responseFactory->view('about.html.twig', [
            'navigation' => [
                array('caption' => 'jahallo', 'href' => '/home'),
                array('caption' => 'yoooooo', 'href' => '/task'),
            ]
        ]);
    }
}
