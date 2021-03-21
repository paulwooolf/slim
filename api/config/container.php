<?php

declare(strict_types=1);

use DI\ContainerBuilder;

$builder = new ContainerBuilder();

$builder->addDefinitions(__DIR__ . '/dependencies.php');

try {
    return $builder->build();
} catch (Exception $e) {
    echo $e->getMessage();
}
