<?php

declare(strict_types=1);

namespace Test\Functional\Http\Action;


use Test\Functional\Http\AbstractFunctionalTest;

class HomeTest extends AbstractFunctionalTest
{
    public function testSuccess(): void
    {
        $response = $this->getResponse('GET', '/');

        self::assertEquals('application/json', $response->getHeaderLine('Content-Type'));
        self::assertEquals(200, $response->getStatusCode());
    }

    public function testNotFound(): void
    {
        $response = $this->getResponse('GET', '/thisPageNo');

        self::assertEquals(404, $response->getStatusCode());
    }
}
