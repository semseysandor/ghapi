<?php
/*
 * Copyright (c) 2021. Sandor Semsey <sandor@es-progress.hu
 *
 * This work is licensed under the MIT license.
 * For the details, see: https://choosealicense.com/licenses/mit/
 */

declare(strict_types=1);

use GHAPI\Engine;

include '../vendor/autoload.php';

# Get Github token from env var
$token = $_ENV['GH_TOKEN'] ?? "";

$engine = new Engine($token, $argc, $argv);
$engine->run();
