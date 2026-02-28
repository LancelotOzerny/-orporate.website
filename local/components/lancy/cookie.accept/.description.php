<?php
B_PROLOG_INCLUDED === true || die();

use Bitrix\Main\Localization\Loc;

$arComponentDescription = [
  'NAME' => Loc::getMessage('COOKIE_ACCEPT.COMPONENT_NAME'),
  'DESCRIPTION' => Loc::getMessage('COOKIE_ACCEPT.COMPONENT_DESC'),
  'PATH' => [
      'ID' => 'utility',
      'CHILD' => [
          'ID' => 'cookie_banner',
          'NAME' => Loc::getMessage('COOKIE_ACCEPT.GROUP_NAME')
      ]
  ],
];

