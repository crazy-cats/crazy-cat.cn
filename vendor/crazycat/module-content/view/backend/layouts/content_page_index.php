<?php

/*
 * Copyright © 2020 CrazyCat, Inc. All rights reserved.
 * See COPYRIGHT.txt for license details.
 */

/**
 * @category CrazyCat
 * @package  CrazyCat\Content
 * @author   Liwei Zeng <zengliwei@163.com>
 * @link     https://crazy-cat.cn
 */
return [
    'template' => '2columns_left',
    'blocks'   => [
        'header' => [
            'header-buttons' => [
                'class' => 'CrazyCat\Base\Block\Template',
                'data'  => [
                    'template' => 'CrazyCat\Base::header_buttons',
                    'buttons'  => [
                        'delete' => [
                            'label'  => __('Mass Delete'),
                            'action' => [
                                'type'    => 'massDelete',
                                'confirm' => __('Sure you want to remove selected item(s)?'),
                                'params'  => [
                                    'target' => '#grid-form',
                                    'action' => getUrl('content/page/massdelete')
                                ]
                            ]
                        ],
                        'new'    => [
                            'label'  => __('Create New'),
                            'action' => [
                                'type'   => 'redirect',
                                'params' => ['url' => getUrl('content/page/edit')]
                            ]
                        ]
                    ]
                ]
            ]
        ],
        'main'   => [
            'gird-form' => [
                'class' => 'CrazyCat\Content\Block\Backend\Page\Grid'
            ]
        ]
    ]
];
