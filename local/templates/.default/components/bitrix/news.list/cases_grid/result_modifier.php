<?php B_PROLOG_INCLUDED === true || die();

/** @var array $arResult */
/** @var array $arParams */

$arSections = [];

foreach ($arResult["ITEMS"] as &$arItem)
{
    $arItem['TAGS'] = explode(', ', $arItem['TAGS']);

    $section_id = $arItem['IBLOCK_SECTION_ID'];
    $section = CIBlockSection::GetList(
        [],
        [
            'ID' => $section_id,
            'IBLOCK_ID' => $arParams['IBLOCK_ID'],
        ],
        false,
        [
            'ID', 'NAME', 'UF_BG_COLOR'
        ]
    )->Fetch();
    $arItem['PARENT_SECTION'] = [
        'ID' => $section_id,
        'NAME' => $section['NAME'],
        'UF_BG_COLOR' => $section['UF_BG_COLOR'],
    ];
    $arSections[$section_id] = $section['NAME'];
}

$arResult['FILTERS'] = $arSections;