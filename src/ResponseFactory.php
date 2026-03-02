<?php

namespace Framework;

class ResponseFactory
{
    public function body(string $text): Response
    {
        return new Response(200, $text);
    }

    public function notFound(): Response
    {
        return new Response(404, "Not Found");
    }
}
