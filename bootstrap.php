<?php

require(__DIR__ . '/src/Payline/Settings.php');
require(__DIR__ . '/tests/Payline/Fixtures.php');
require(__DIR__ . '/src/Payline/Bootstrap.php');

use \Payline\Tests\Fixtures;
use \Payline\Settings;
use \Payline\Bootstrap;

Fixtures::$apiUrl = "https://api-test.payline.io/";

Settings::configure([
    "root_url" => Fixtures::$apiUrl
]);

Bootstrap::init();
