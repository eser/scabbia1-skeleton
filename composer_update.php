<?php

if (PHP_SAPI != 'cli') {
    throw new RuntimeException('composer_update.php only runs under Command Line Interface (CLI).');
}

if (stristr(PHP_OS, 'WIN')) {
    $tComposerCmd = 'composer';
} else {

    if (isset($_SERVER['_'])) {
        $tPhpPath = $_SERVER['_'];
    } else {
        $tPhpPath = 'php';
    }

    $tComposerCmd = $tPhpPath . ' composer.phar';

    if (!file_exists('composer.phar')) {
        passthru('curl -s http://getcomposer.org/installer | php');
    }
}

if (file_exists('vendor')) {
    passthru($tComposerCmd . ' update');
} else {
    passthru($tComposerCmd . ' install');
}
