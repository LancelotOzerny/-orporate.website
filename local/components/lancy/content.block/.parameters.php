<?php B_PROLOG_INCLUDED === true || die();

/** @var array $arCurrentValues */

$arIblockTypes = ['' => 'Не выбрано'];
$arIblocks = [0 => 'Не выбрано'];
$arIblockSections = [0 => 'Не выбрано'];

if (!CModule::IncludeModule("iblock")) return;

echo '<pre>';
print_r($arCurrentValues);
echo '</pre>';

/* =========================== IBLOCK TYPES =========================== */
$db_iblock_type = CIBlockType::GetList();
while($ar_iblock_type = $db_iblock_type->Fetch())
{
    if($arIBType = CIBlockType::GetByIDLang($ar_iblock_type["ID"], LANG))
    {
        $arIblockTypes[$arIBType['ID']] = $arIBType["NAME"];
    }
}

/* =========================== IBLOCK LIST =========================== */
$isCorrectType = $arCurrentValues['IBLOCK_TYPE'] ?: false;
$isCorrectIBlock = $arCurrentValues['IBLOCK_ID'] ?: false;

if ($isCorrectType)
{
    $res = CIBlock::GetList(
        [],
        [
            'IBLOCK_TYPE_ID' => $arCurrentValues['IBLOCK_TYPE'],
            'ACTIVE' => 'Y'
        ],
        true
    );

    while($ar_res = $res->Fetch())
    {
        $arIblocks[$ar_res['ID']] = "[{$ar_res['ID']}] {$ar_res['NAME']}";
    }
}

/* =========================== IBLOCK LIST =========================== */
if ($isCorrectType && $isCorrectIBlock)
{
    $res = CIBlockSection::GetList([], ['IBLOCK_ID' => $arCurrentValues['IBLOCK_ID'], 'ACTIVE' => 'Y'], false);

    while($ar_res = $res->Fetch())
    {
        $arIblockSections[$ar_res['ID']] = "[{$ar_res['ID']}] {$ar_res['NAME']}";
    }
}


/* =========================== BASE PARAMS =========================== */
$arComponentParameters = [
    'GROUPS' => [
        'SETTINGS' => [
            'NAME' => 'Настройки компонента'
        ]
    ],
    "PARAMETERS" => [
        "IBLOCK_TYPE" => [
            "PARENT" => "SETTINGS",
            "NAME" => "Тип инфоблока",
            "TYPE" => "LIST",
            "VALUES" => $arIblockTypes,
            "REFRESH" => "Y"
        ],
    ]
];

/* =========================== REFRESH PARAMS =========================== */
if ($isCorrectType)
{
    $arComponentParameters["PARAMETERS"]["IBLOCK_ID"] = [
        "PARENT" => "SETTINGS",
        "NAME" => "Инфоблок",
        "TYPE" => "LIST",
        "VALUES" => $arIblocks,
        "REFRESH" => "Y",
    ];
}

if ($isCorrectType && $isCorrectIBlock)
{
    $arComponentParameters["PARAMETERS"]["SECTION_ID"] = [
        "PARENT" => "SETTINGS",
        "NAME" => "Раздел инфоблока",
        "TYPE" => "LIST",
        'VALUES' => $arIblockSections,
    ];
}