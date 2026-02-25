<?php

namespace App\Controller;

use Framework\Response;

class TaskController
{
    public function index(): Response
    {
        return new Response(200, 'Body van Index');
    }

    public function create(): Response
    {
        return new Response(200, 'Body van Create');
    }
}
