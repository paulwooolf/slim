<?php

declare(strict_types=1);

namespace Test\Functional\Http\Action;

use PHPUnit\Framework\TestCase;
use Slim\Psr7\Factory\ServerRequestFactory;

class HomeTest extends TestCase
{
    public function testSuccess(): void
    {
        $container = require __DIR__ . '/../../../../config/container.php';
        $app = (require __DIR__ . '/../../../../config/app.php')($container);
        $request = (new ServerRequestFactory())->createServerRequest('GET', '/');
        $response = $app->handle($request);

        self::assertEquals('application/json', $response->getHeaderLine('Content-Type'));
        self::assertEquals(200, $response->getStatusCode());
    }
}
