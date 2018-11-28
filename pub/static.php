<?php

/*
 * Copyright © 2018 CrazyCat, Inc. All rights reserved.
 * See LICENSE for license details.
 */

/**
 * @category CrazyCat
 * @package CrazyCat\Framework
 * @author Bruce Z <152416319@qq.com>
 * @link http://crazy-cat.co
 */
error_reporting( E_ALL | E_STRICT );

/**
 * global static variables
 */
require '../definitions';

/* @var $composerLoader \Composer\Autoload\ClassLoader */
$composerLoader = require '../vendor/autoload.php';

\CrazyCat\Framework\App::getInstance()->getStatic( $composerLoader );
