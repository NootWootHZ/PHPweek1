<?php

namespace Framework;

use phpDocumentor\GraphViz\Exception;
use Twig\Environment;

class ResponseFactory
{

    private Environment $twig;

    public function __construct()
    {
        $loader = new \Twig\Loader\FilesystemLoader('../app/views/');
        $twig = new \Twig\Environment($loader, [
            'debug' => true
        ]);
        $this->twig = $twig;
    }

    /**
     * @param string $template
     * @param array $parameters
     * @return Response
     * @throws Exception
     */
    public function view(string $template, array $parameters): Response
    {
        try {
            return new Response(200, $this->twig->render($template, $parameters));
        } catch (\Exception $e) {
            throw new Exception('Failed to render' . $e);
        }
    }

    public function body(string $text): Response
    {
        return new Response(200, $text);
    }

    /**
     * @return Response
     * @throws Exception
     */
    public function notFound(): Response
    {
        try {
            return new Response(404, $this->twig->render("404.html.twig"));
        } catch (\Exception $e) {
            throw new Exception('Failed to render' . $e);
        }
    }
}
