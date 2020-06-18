<?php
/*
 * Copyright © 2020 CrazyCat, Inc. All rights reserved.
 * See COPYRIGHT.txt for license details.
 */

/* @var $this \CrazyCat\Framework\App\Component\Theme\Page */

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo getLangCode(); ?>" lang="<?php echo getLangCode(); ?>">
<head>
    <title><?php echo htmlEscape($this->getPageTitle()); ?> - CrazyCat</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" value="<?php echo htmlEscape($this->getData('meta_keywords')); ?>"/>
    <meta name="description" value="<?php echo htmlEscape($this->getData('meta_description')); ?>"/>
    <meta name="robots" value="<?php echo htmlEscape($this->getData('meta_robots')); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <link rel="shortcut icon" href="<?php echo $this->getThemeUrl('images/favicon.ico'); ?>" type="image/x-icon"/>
    <?php echo $this->getCssScripts(); ?>
    <?php echo $this->getSectionHtml('head'); ?>
</head>
<body class="two-columns <?php echo $this->getLayoutName('-') ?>">
<div class="header-wrapper wrapper">
    <div class="header">
        <?php echo $this->getSectionHtml('header'); ?>
    </div>
</div>
<div class="main-wrapper wrapper">
    <div class="left">
        <?php echo $this->getSectionHtml('left'); ?>
    </div>
    <div class="main">
        <?php echo $this->getSectionHtml('messages'); ?>
        <?php echo $this->getSectionHtml('main'); ?>
    </div>
</div>
<div class="footer-wrapper wrapper">
    <div class="footer">
        <?php echo $this->getSectionHtml('footer'); ?>
    </div>
</div>
</body>
</html>