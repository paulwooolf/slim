<?php

declare(strict_types=1);


use Slim\App;
use \App\Middleware\ValidationExceptionHandler;

return static function (App $app): void {
    $app->add(ValidationExceptionHandler::class);
};
