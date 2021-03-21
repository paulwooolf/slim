<?php

namespace App\Http\Action;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

class IndexAction
{
    public function __invoke(Request $request, Response $response): Response
    {
        $response->getBody()->write('index');
        return $response->withHeader('Content-Type', 'application/json');
    }
}
