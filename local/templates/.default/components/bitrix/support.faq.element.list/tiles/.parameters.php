<?php B_PROLOG_INCLUDED === true || die();

/** @var array $arCurrentValues */

$arTemplateParameters = [];

if(!CModule::IncludeModule("iblock"))
{
    return;
}

$iblockId = (int)$arCurrentValues['IBLOCK_ID'] ?? 0;

if ($iblockId > 0)
{
    $arSectionList = [
        0 => \Bitrix\Main\Localization\Loc::getMessage('SUPPORT_FAQ_ELEMENT_LIST.TEMPLATE_TILES.NOT_CHOOSE')
    ];
    $dbSectionList = CIBlockSection::GetList([], ['IBLOCK_ID' => $iblockId]);
    while ($item = $dbSectionList->Fetch())
    {
        $arSectionList[$item['ID']] = "[{$item['ID']}] {$item['NAME']}";
    }

    $arTemplateParameters["SECTION_ID"] = [
        "PARENT" => "SETTINGS",
        "NAME" => \Bitrix\Main\Localization\Loc::getMessage('SUPPORT_FAQ_ELEMENT_LIST.TEMPLATE_TILES.SELECT_IBLOCK_SECTION'),
        "TYPE" => "LIST",
        "VALUES" => $arSectionList,
        "DEFAULT" => '0',
        "SORT" => 30,
    ];
}