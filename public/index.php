<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Tests\Test;

$test = new Test();

echo $test->hello();