<?php B_PROLOG_INCLUDED === true || die();

use Bitrix\Main\Localization\Loc;

Loc::loadMessages(__FILE__);

$arComponentDescription = [
    'NAME' => Loc::getMessage('CONTENT_BLOCK.DESCRIPTION.NAME'),
    'DESCRIPTION' => Loc::getMessage('CONTENT_BLOCK.DESCRIPTION.DESCRIPTION'),
    'PATH' => [
        'ID' => 'Lancy',
        'CHILD' => [
          'ID' => 'content',
          'NAME' => Loc::getMessage('CONTENT_BLOCK.DESCRIPTION.GROUP_NAME'),
        ],
    ]
];