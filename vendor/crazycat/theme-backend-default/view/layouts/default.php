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
    'template' => '2columns_left',
    'css'      => [
        'css/styles.css'
    ],
    'blocks'   => [
        'head'     => [
            'js-in-head' => ['class' => 'CrazyCat\Base\Block\Head']
        ],
        'header'   => [
            'page-title' => [
                'class' => 'CrazyCat\Base\Block\Template',
                'data'  => ['template' => 'CrazyCat\Base::header']
            ]
        ],
        'left'     => [
            'lang-switcher' => ['class' => 'CrazyCat\Base\Block\LanguageSwitcher'],
            'main-menu'     => ['class' => 'CrazyCat\Admin\Block\Menu']
        ],
        'messages' => [
            'message-box' => ['class' => 'CrazyCat\Base\Block\Message']
        ],
        'main'     => [
            'main-content' => [
                'class' => 'CrazyCat\Base\Block\Template',
                'data'  => ['template' => 'CrazyCat\Base::main']
            ]
        ],
        'footer'   => [
            'footer-content' => [
                'class' => 'CrazyCat\Base\Block\Template',
                'data'  => ['template' => 'CrazyCat\Base::footer']
            ]
        ]
    ]
];
