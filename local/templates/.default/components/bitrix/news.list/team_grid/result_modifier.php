<?php B_PROLOG_INCLUDED === true || die();

/** @var array $arResult */
/** @var array $arParams */

$arFilterSections = [];
$arFilterSections[0] = \Bitrix\Main\Localization\Loc::getMessage('ALL_EMPLOYEE_TEXT');

$arSections = [];
$newItemsList = [];

foreach ($arResult["ITEMS"] as &$arItem)
{
    $section_id = $arItem['IBLOCK_SECTION_ID'];
    $section = CIBlockSection::GetList(
        [],
        [
            'ID' => $section_id,
            'IBLOCK_ID' => $arParams['IBLOCK_ID'],
            'NAME' => $arParams['NAME'],
        ]
    )->Fetch();

    $arSections[$section_id]['ID'] ??= $section_id;
    $arSections[$section_id]['NAME'] ??= $section['NAME'];
    $arSections[$section_id]['ITEMS'] ??= [];
    $arSections[$section_id]['ITEMS'][] = $arItem;

    $arFilterSections[$section_id] = $section['NAME'];
}

$arResult['ITEMS'] = $arSections;
$arResult['FILTERS'] = $arFilterSections;