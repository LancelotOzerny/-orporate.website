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
        0 => 'Не выбрано'
    ];
    $dbSectionList = CIBlockSection::GetList([], ['IBLOCK_ID' => $iblockId]);
    while ($item = $dbSectionList->Fetch())
    {
        $arSectionList[$item['ID']] = "[{$item['ID']}] {$item['NAME']}";
    }

    $arTemplateParameters["SECTION_ID"] = [
        "PARENT" => "SETTINGS",
        "NAME" => 'Выбор раздела ИБлока',
        "TYPE" => "LIST",
        "VALUES" => $arSectionList,
        "DEFAULT" => '0',
        "SORT" => 30,
    ];
}