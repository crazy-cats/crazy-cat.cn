<?php

/*
 * Copyright © 2020 CrazyCat, Inc. All rights reserved.
 * See COPYRIGHT.txt for license details.
 */

namespace CrazyCat\Content\Block;

/**
 * @category CrazyCat
 * @package  CrazyCat\Content
 * @author   Liwei Zeng <zengliwei@163.com>
 * @link     https://crazy-cat.cn
 */
class Page extends \CrazyCat\Framework\App\Component\Module\Block\AbstractBlock
{
    protected $template = 'CrazyCat\Content::page';

    public function getPage()
    {
        return $this->registry->registry('current_page');
    }
}
