<?php

// if scabbia installation on different directory
// define('SCABBIA_PATH', __DIR__ . '/../scabbia-dev/src');

if(!file_exists('vendor/autoload.php')) {
    throw new RuntimeException('Unable to load Scabbia Framework. Run `php composer.phar install` or define a php constant named SCABBIA_PATH to locate the framework installation.');
}

$loader = require('vendor/autoload.php');

if (defined('SCABBIA_PATH') && SCABBIA_PATH !== false) {
    $loader->set('Scabbia', SCABBIA_PATH);
}

use Scabbia\Framework;

// Framework::$endpoints[] = 'http://scabbiaapp.com';
Framework::$development = 1;
Framework::load($loader);

Framework::run(
    array(
        'Scabbia\\Extensions\\Http\\Http::routing',
        'Scabbia\\Extensions\\Assets\\Assets::routing'
    ),
    'Scabbia\\Extensions\\Http\\Http::notfound',
    'Scabbia\\Extensions\\Http\\Http::error'
);
