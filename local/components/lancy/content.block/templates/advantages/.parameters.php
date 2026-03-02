<?php B_PROLOG_INCLUDED === true || die();

use Bitrix\Main\Localization\Loc;

Loc::loadMessages(__FILE__);

$arTemplateParameters = [
    'ELEMENT_MODIFIER' => [
        'GROUP' => 'ADDITIONAL',
        'NAME' => Loc::getMessage('CONTENT_BLOCK.TEMPLATE.ADVANTAGES.PARAM.ELEMENT_MODIFIER'),
        'TYPE' => 'STRING',
        'DEFAULT' => '',
    ]
];