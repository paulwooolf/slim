<?php

declare(strict_types=1);

$files = glob(__DIR__ . '/common/*.php');

$array_map = [];
foreach ($files as $key => $file) {
    $array_map[$key] = require $file;
}
return array_merge_recursive(...$array_map);
