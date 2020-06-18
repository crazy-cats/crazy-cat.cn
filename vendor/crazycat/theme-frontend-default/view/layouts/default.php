<?php

/*
 * Copyright © 2020 CrazyCat, Inc. All rights reserved.
 * See COPYRIGHT.txt for license details.
 */

/**
 * @category CrazyCat
 * @package  CrazyCat\Theme\Frontend\Default
 * @author   Liwei Zeng <zengliwei@163.com>
 * @link     https://crazy-cat.cn
 */
return [
    'template' => '1column',
    'css'      => [
        'css/styles.css'
    ],
    'blocks'   => [
        'head'     => [
            'js-in-head' => ['class' => 'CrazyCat\Base\Block\Head']
        ],
        'messages' => [
            'message-box' => ['class' => 'CrazyCat\Base\Block\Message']
        ],
        'footer'   => [
            'footer-content' => ['class' => 'CrazyCat\Base\Block\Template']
        ]
    ]
];
