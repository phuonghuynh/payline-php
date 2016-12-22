<?php

require(__DIR__ . '/src/Payline/Settings.php');
require(__DIR__ . '/tests/Payline/Fixtures.php');
require(__DIR__ . '/src/Payline/Bootstrap.php');

use \Payline\Tests\Fixtures;
use \Payline\Settings;
use \Payline\Bootstrap;

$processing_url = getenv("PROCESSING_URL");
if ($processing_url == null) {
    $processing_url =  "https://api-test.payline.io";
}

Fixtures::$apiUrl = $processing_url;

Settings::configure([
    "root_url" => Fixtures::$apiUrl
]);

Bootstrap::init();
