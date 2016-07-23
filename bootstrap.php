<?php

require(__DIR__ . '/src/Payline/Settings.php');
require(__DIR__ . '/tests/Payline/SampleData.php');
require(__DIR__ . '/src/Payline/Bootstrap.php');

use Payline\Settings;
use Payline\Bootstrap;
use Payline\Tests\SampleData;

Settings::configure(
  SampleData::$apiUrl,
  SampleData::$username,
  SampleData::$password
);

Bootstrap::init();