<?php

declare(strict_types=1);

use Slim\App;
use Slim\Factory\AppFactory;
use Psr\Container\ContainerInterface;

return static function (ContainerInterface $container): App {
    $app = AppFactory::createFromContainer($container);
    (require __DIR__ . '/../config/middleware.php')($app);
    (require __DIR__ . '/../config/routes.php')($app);
    return $app;
};
