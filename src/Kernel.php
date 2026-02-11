<?php

namespace Framework;

class Kernel
{
    public function construct()
    {
    }

    public function handle(Request $request): Response
    {
        return new Response(200, 'beep', 'beep');
    }
}
