<?php

set_time_limit(0);
require __DIR__ . '/../vendor/autoload.php';
use Symfony\Component\Console\Application;
$application = new Application('brew-test', '@package_version@');
$application->run();
