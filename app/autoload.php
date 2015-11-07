<?php

use Composer\Autoload\ClassLoader;
use Doctrine\Common\Annotations\AnnotationRegistry;

/**
 * @var ClassLoader
 */

if (!getenv('COMPOSER_VENDOR_DIR')) {
    putenv('COMPOSER_VENDOR_DIR='.__DIR__.'/../vendor');
}

$loader = require getenv('COMPOSER_VENDOR_DIR') . '/autoload.php';

AnnotationRegistry::registerLoader([$loader, 'loadClass']);

return $loader;
