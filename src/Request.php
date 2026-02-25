<?php

namespace Framework;

class Request
{
    public string $method;

    public string $path;

    public array $queryParameters;

    public array $postParameters;

    public function __construct(string $method, string $path, array $queryParameters, array $postParameters)
    {
    $this->method = $method;
    $this->path = $path;
    $this->queryParameters = $queryParameters;
    $this->postParameters = $postParameters;
    }
}
