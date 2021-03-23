<?php

declare(strict_types=1);

namespace App\Middleware;

use App\Http\JsonResponse;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\MiddlewareInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Slim\Exception\HttpException;

class ValidationExceptionHandler implements MiddlewareInterface
{

    public function process(ServerRequestInterface $request, RequestHandlerInterface $handler): ResponseInterface
    {
        try {
            return $handler->handle($request);
        } catch (HttpException $e) {
            return new JsonResponse([
                'error' => $e->getMessage()
            ], 404);
        }
    }
}
