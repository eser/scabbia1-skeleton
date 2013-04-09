#!/usr/bin/php
<?php

if (file_exists('vendor')) {
    passthru('php composer.phar update');
} else {
    passthru('curl -s http://getcomposer.org/installer | php');
    passthru('php composer.phar install');
}
