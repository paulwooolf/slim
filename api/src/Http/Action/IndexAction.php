<?php

declare(strict_types=1);

namespace App\Http\Action;

use Slim\Psr7\Response;
use Slim\Psr7\Request;

class IndexAction
{
    public function __invoke(Request $request, Response $response, $args): Response
    {
        $response->getBody()->write('index');
        return $response->withHeader('Content-Type', 'application/json');
    }
}
