<?php


namespace App\Http\Action;


use Slim\Psr7\Request;
use Slim\Psr7\Response;

class HomeAction
{
    public function __invoke(Request $request, Response $response): Response
    {
        $response->getBody()->write('home');
        return $response->withHeader('Content-Type', 'application/json');
    }
}
