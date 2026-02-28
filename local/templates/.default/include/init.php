<?php
B_PROLOG_INCLUDED === true || die();

use Bitrix\Main\Page\Asset;

Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/bootstrap.min.css');
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/bootstrap-icons.css');
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/style.css');