<?php
B_PROLOG_INCLUDED === true || die();

use Bitrix\Main\Page\Asset;

Asset::getInstance()->addCss('/local/templates/.default/css/bootstrap.min.css');
Asset::getInstance()->addCss('/local/templates/.default/css/bootstrap-icons.css');
Asset::getInstance()->addCss('/local/templates/.default/css/style.css');

Asset::getInstance()->addJs("/local/templates/.default/js/jquery-3.6.0.min.js");
Asset::getInstance()->addJs("/local/templates/.default/js/bootstrap.bundle.min.js");
Asset::getInstance()->addJs("/local/templates/.default/js/script.js");