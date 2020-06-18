<?php

/*
 * Copyright © 2020 CrazyCat, Inc. All rights reserved.
 * See LICENSE for license details.
 */

/**
 * @category CrazyCat
 * @package  CrazyCat\Framework
 * @author   Liwei Zeng <zengliwei@163.com>
 * @link     https://crazy-cat.cn
 */
error_reporting(E_ALL | E_STRICT);

/**
 * global static variables
 */
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', __DIR__);
define('DIR_APP', ROOT . DS . 'app');
define('DIR_PUB', ROOT . DS . 'pub');
define('DIR_VAR', ROOT . DS . 'var');

/* @var $composerLoader \Composer\Autoload\ClassLoader */
$composerLoader = require 'vendor/autoload.php';

if (defined('GET_STATIC')) {
    \CrazyCat\Framework\App::getInstance()->getStatic($composerLoader);
} else {
    \CrazyCat\Framework\App::getInstance()->run($composerLoader);
    \CrazyCat\Framework\Utility\Profile::printProfiles();
}
