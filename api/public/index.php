<?php

declare(strict_types=1);

use Slim\Factory\AppFactory;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use App\Http\Action\IndexAction;
use App\Http\Action\HomeAction;

http_response_code(500);

require __DIR__ . '/../vendor/autoload.php';

$container = require __DIR__ . '/../config/container.php';
$app = (require __DIR__ . '/../config/app.php')($container);
$app->run();
