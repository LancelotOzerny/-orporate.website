<?php
B_PROLOG_INCLUDED === true || die();

use Bitrix\Main\Localization\Loc;

Loc::loadMessages(__FILE__);

$arTemplate = [
  'NAME' => Loc::getMessage('TEMPLATE.DEFAULT.NAME'),
  'DESCRIPTION' => Loc::getMessage('TEMPLATE.DEFAULT.DESC'),
];
?>