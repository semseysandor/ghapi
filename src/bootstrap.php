<?php

declare(strict_types=1);

use GHAPI\Engine;

include '../vendor/autoload.php';

# Get Github token from env var
$token = $_ENV['GH_TOKEN'] ?? "";

$engine = new Engine($token, $argc, $argv);
$engine->run();
