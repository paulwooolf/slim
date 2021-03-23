<?php

namespace Test\Functional\Http;

use PHPUnit\Framework\TestCase;
use Psr\Http\Message\ResponseInterface;
use Slim\Psr7\Factory\ServerRequestFactory;

abstract class AbstractFunctionalTest extends TestCase
{
    protected function getResponse(string $method, string $url): ResponseInterface
    {
        $container = require __DIR__ . '/../../../config/container.php';
        $app = (require __DIR__ . '/../../../config/app.php')($container);
        $request = (new ServerRequestFactory())->createServerRequest(
            $method,
            $url
        );
        return $app->handle($request);
    }
}
