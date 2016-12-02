# Payline Client

[![Circle CI](https://circleci.com/gh/Payline/payline-php.svg?style=svg)](https://circleci.com/gh/Payline/payline-php)

## Requirements

PHP 5.4 and later.

## Issues

Please use appropriately tagged github [issues](https://github.com/Payline/payline-php/issues) to request features or report bugs.

## Composer

You can install the bindings via [Composer](http://getcomposer.org/). Run the following command:

```bash
composer require payline-data/payline-php
```

To use the bindings, use Composer's [autoload](https://getcomposer.org/doc/00-intro.md#autoloading):

```php
require_once('vendor/autoload.php');
```

## Getting Started

```php
require('/path/to/Payline/Settings.php');
require('/path/to/Payline/Bootstrap.php');

use \Payline\Settings;
use \Payline\Bootstrap;

Settings::configure([
    "root_url" => "https://api-staging.finix.io",
    "username" => 'US4CoseCAaB5RjTYrnwfDrZa',
    "password" => '4ca5aef5-f077-4277-a785-00f2cab07c21'
]);

Bootstrap::init();
```

See the [tests](https://github.com/Payline/payline-php/tree/master/tests) for more details.

### Running tests

`./vendor/bin/phpunit`

See `circle.yml` for more details.

