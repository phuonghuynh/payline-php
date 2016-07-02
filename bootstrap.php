<?php

require(__DIR__ . '/src/Payline/Settings.php');
Payline\Settings::configure(
  'https://api-staging.finix.io/',
  'USkmuYs3Sb2kcryiicgHbxGE',
  '54fde51b-6031-4118-acf0-72f4374e8972'
);

require(__DIR__ . '/src/Payline/Bootstrap.php');
\Payline\Bootstrap::init();