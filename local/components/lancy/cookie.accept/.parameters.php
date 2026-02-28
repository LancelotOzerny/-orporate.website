<?php
use Bitrix\Main\Localization\Loc;

$arComponentParameters = [
    'GROUPS' => [
        'BASE' => [
            'NAME' => 'General'
        ]
    ],
    'PARAMETERS' => [
        'COOKIE_LIFETIME' => [
            'PARENT' => 'BASE',
            'NAME' => Loc::getMessage('COOKIE_BANNER.PARAMS.COOKIE_LIFETIME'),
            'TYPE' => 'NUMBER',
            'DEFAULT' => '365',
        ],
        'PRIVACY_POLICY_LINK' => [
            'PARENT' => 'BASE',
            'NAME' => Loc::getMessage('COOKIE_BANNER.PARAMS.PRIVACY_POLICY_LINK'),
            'TYPE' => 'STRING',
        ]
    ]
];