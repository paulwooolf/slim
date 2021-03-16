<?php

declare(strict_types=1);

use Symfony\Component\Console\Application;
use App\Console\TmpCommand;

require __DIR__ . '/../vendor/autoload.php';

$cli = new Application('Console');

$cli->add(new TmpCommand());

$cli->run();
