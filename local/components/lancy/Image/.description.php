<?php
B_PROLOG_INCLUDED === true || die();

use Bitrix\Main\Localization\Loc;

$arComponentDescription = [
    'NAME' => Loc::getMessage('IMAGE.COMPONENT.NAME'),
    'DESCRIPTION' => Loc::getMessage('IMAGE.COMPONENT.DESC'),
    'PATH' => [
        'ID' => 'Lancy',
        'CHILD' => [
            'ID' => 'image',
            'NAME' => Loc::getMessage('IMAGE.COMPONENT.GROUP_NAME'),
        ]
    ],
];