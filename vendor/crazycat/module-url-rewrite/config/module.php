<?php

/*
 * Copyright © 2020 CrazyCat, Inc. All rights reserved.
 * See COPYRIGHT.txt for license details.
 */

/**
 * @category CrazyCat
 * @package  CrazyCat\UrlRewrite
 * @author   Liwei Zeng <zengliwei@163.com>
 * @link     https://crazy-cat.cn
 */
return [
    'namespace' => 'CrazyCat\UrlRewrite',
    'depends'   => [
        'CrazyCat\Base'
    ],
    'routes'    => [
        'backend' => 'url_rewrite'
    ],
    'setup'     => [
        'CrazyCat\UrlRewrite\Setup\Install'
    ]
];
