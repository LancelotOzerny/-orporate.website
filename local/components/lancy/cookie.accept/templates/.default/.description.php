<?php B_PROLOG_INCLUDED === true || die();

use Bitrix\Main\Localization\Loc;

Loc::loadMessages(__FILE__);

$arTemplateDescription = array(
    "NAME" => Loc::getMessage('COOKIE_BANNER.DEFAULT.NAME'),
    "DESCRIPTION" => Loc::getMessage('COOKIE_BANNER.DEFAULT.DESC'),
);