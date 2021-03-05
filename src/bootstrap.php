<?php

// Strict typing
declare(strict_types=1);

// Autoloader
use GHAPI\Engine;

include '../vendor/autoload.php';
var_dump($argc);
var_dump($argv);
$engine = new Engine("xxxxxxxxxxxxxxxxxxxx",$argc,$argv);
$engine->run();
