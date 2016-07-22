<?php

require(__DIR__ . '/src/Payline/Settings.php');
require(__DIR__ . '/tests/Payline/SampleData.php');
require(__DIR__ . '/src/Payline/Bootstrap.php');

use Payline\Test\SampleData;
use Payline\Settings;
use Payline\Bootstrap;

Settings::configure(
  SampleData::$apiUrl,
  SampleData::$username,
  SampleData::$password
);

Bootstrap::init();