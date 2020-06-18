<?php

/*
 * Copyright © 2020 CrazyCat, Inc. All rights reserved.
 * See COPYRIGHT.txt for license details.
 */

use CrazyCat\Framework\App\Component\Manager as ComponentManager;

/**
 * @category CrazyCat
 * @package  CrazyCat\Language\ZhCn
 * @author   Liwei Zeng <zengliwei@163.com>
 * @link     https://crazy-cat.cn
 */
ComponentManager::getInstance()->register('crazycat_zh_cn', ComponentManager::TYPE_LANG, __DIR__);
