<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Loader;

if (!Loader::includeModule('iblock')) return;

$arTemplateParameters = [];

// Группа
$arTemplateParameters["GROUPS"]['DATA_SOURCE'] = [
    'NAME' => 'Источник данных'
];

// 1. Список типов ИБ
$arIblockTypes = ['-' => '(все)'];
$dbIBlockTypes = CIBlockType::GetList(['SORT' => 'ASC']);
while ($arType = $dbIBlockTypes->Fetch()) {
    if ($arIBType = CIBlockType::GetByIDLang($arType["ID"], LANG_ADMIN_LID ?? LANGUAGE_ID)) {
        $arIblockTypes[$arType["ID"]] = $arIBType["NAME"];
    }
}

$arTemplateParameters['IBLOCK_TYPE'] = [
    'PARENT' => 'DATA_SOURCE',
    'NAME' => 'Тип инфоблока',
    'TYPE' => 'LIST',
    'VALUES' => $arIblockTypes,
    'DEFAULT' => '-',
    'REFRESH' => 'Y'
];

// 2. Список ИБ (зависит от типа)
$arIblocks = ['0' => 'Не выбран'];
if (!empty($arCurrentValues['IBLOCK_TYPE']) && $arCurrentValues['IBLOCK_TYPE'] !== '-') {
    $filter = ['TYPE' => $arCurrentValues['IBLOCK_TYPE'], 'ACTIVE' => 'Y'];
    $rsIBlocks = CIBlock::GetList(['SORT' => 'ASC'], $filter);
    while ($ar = $rsIBlocks->Fetch()) {
        $arIblocks[$ar['ID']] = '[' . $ar['ID'] . '] ' . $ar['NAME'];
    }
}

$arTemplateParameters = [
    "GROUPS" => [
        "BUTTONS_GROUP" => ["NAME" => "Кнопки CTA"]
    ]
];

$arTemplateParameters['IBLOCK_ID'] = [
    'PARENT' => 'DATA_SOURCE',
    'NAME' => 'Инфоблок',
    'TYPE' => 'LIST',
    'VALUES' => $arIblocks,
    'DEFAULT' => '0',
    'REFRESH' => 'Y'
];

// 3. Элементы (зависит от ИБ)
$iblockId = (int)($arCurrentValues['IBLOCK_ID'] ?? 0);
if ($iblockId > 0)
{
    $arElements = ['0' => 'Не выбран'];

    $rsElements = CIBlockElement::GetList(
        ['SORT' => 'ASC'],
        ['IBLOCK_ID' => $iblockId, 'ACTIVE' => 'Y'],
        false,
        ['nTopCount' => 100],
        ['ID', 'NAME']
    );

    while ($arElement = $rsElements->Fetch()) {
        $arElements[$arElement['ID']] = '[' . $arElement['ID'] . '] ' . $arElement['NAME'];
    }

    $arTemplateParameters['ELEMENT_ID'] = [
        'PARENT' => 'DATA_SOURCE',
        'NAME' => 'Элемент инфоблока',
        'TYPE' => 'LIST',
        'VALUES' => $arElements,
        'DEFAULT' => '0',
        'REFRESH' => 'Y'
    ];
}


$iblockId = (int)($arCurrentValues['ELEMENT_ID'] ?? 0);


if ($iblockId > 0)
{
    $arTemplateParameters['BUTTONS_COUNT'] = [
        'PARENT' => 'BUTTONS_GROUP',
        'NAME' => 'Количество кнопок',
        'TYPE' => 'LIST',
        'VALUES' => [1 => '1', 2 => '2', 3 => '3', 4 => '4', 5 => '5'],
        'DEFAULT' => '2',
        'REFRESH' => 'Y'
    ];

    $btnCount = (int)($arCurrentValues['BUTTONS_COUNT'] ?? 2);
    for ($i = 1; $i <= $btnCount; $i++)
    {
        $arTemplateParameters['BTN' . $i . '_TEXT'] = [
            'PARENT' => 'BUTTONS_GROUP',
            'NAME' => "Кнопка $i: Текст",
            'TYPE' => 'STRING',
            'DEFAULT' => ''
        ];

        $arTemplateParameters['BTN' . $i . '_LINK'] = [
            'PARENT' => 'BUTTONS_GROUP',
            'NAME' => "Кнопка $i: Ссылка",
            'TYPE' => 'STRING',
            'DEFAULT' => ''
        ];

        $arTemplateParameters['BTN' . $i . '_ICON_MODIFIER'] = [
            'PARENT' => 'BUTTONS_GROUP',
            'NAME' => "Кнопка $i: Иконка (bi-...)",
            'TYPE' => 'STRING',
            'DEFAULT' => ''
        ];
    }
}
?>
