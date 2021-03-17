<?php

declare(strict_types=1);

use Slim\Factory\AppFactory;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

http_response_code(500);

require __DIR__ . '/../vendor/autoload.php';

$container = require __DIR__ . '/../config/container.php';
AppFactory::setContainer($container);
$app = AppFactory::create();

$app->get('/', function (Request $request, Response $response, array $args) {
   $response->getBody()->write("I't is / path");
   return $response;
});

$app->get('/home', function (Request $request, Response $response, array $args) {
    $response->getBody()->write("I't is /home path");
    return $response;
});

$app->run();
