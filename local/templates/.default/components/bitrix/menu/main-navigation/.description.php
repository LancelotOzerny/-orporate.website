<?php B_PROLOG_INCLUDED === true || die();

use Bitrix\Main\Localization\Loc;

Loc::loadMessages(__FILE__);

$arTemplateDescription = array(
    "NAME" => Loc::getMessage('COMPONENT.MENU.MAIN_NAVIGATION.NAME'),
    "DESCRIPTION" => Loc::getMessage('COMPONENT.MENU.MAIN_NAVIGATION.DESC'),
);