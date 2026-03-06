<?php B_PROLOG_INCLUDED === true || die();

use Bitrix\Main\Localization\Loc;

Loc::loadMessages(__FILE__);

$arTemplateDescription = array(
    "NAME" => Loc::getMessage('COMPONENT.NEWS_LIST.TEMPLATE.HISTORY.NAME'),
    "DESCRIPTION" => Loc::getMessage('COMPONENT.NEWS_LIST.TEMPLATE.HISTORY.DESC'),
);