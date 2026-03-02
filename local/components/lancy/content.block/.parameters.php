<?php B_PROLOG_INCLUDED === true || die();

/** @var array $arCurrentValues */
use Bitrix\Main\Localization\Loc;

Loc::loadMessages(__FILE__);

$isCorrectType = $arCurrentValues['IBLOCK_TYPE'] ?: false;
$isCorrectIBlock = $arCurrentValues['IBLOCK_ID'] ?: false;

$arIblockTypes = ['' => Loc::getMessage('CONTENT_BLOCK.PARAMETERS.NOT_CHOOSE')];
$arIblocks = $arIblockSections = [0 => Loc::getMessage('CONTENT_BLOCK.PARAMETERS.NOT_CHOOSE')];
$arProperties = [];
$arFields = [];

if (!CModule::IncludeModule("iblock")) return;

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

if ($isCorrectType && $isCorrectIBlock)
{
    /* =========================== IBLOCK SECTION =========================== */
    $res = CIBlockSection::GetList([], ['IBLOCK_ID' => $arCurrentValues['IBLOCK_ID']]);

    while($ar_res = $res->Fetch())
    {
        $arIblockSections[$ar_res['ID']] = "[{$ar_res['ID']}] {$ar_res['NAME']}";
    }



    /* =========================== IBLOCK PROPERTIES =========================== */
    $rsProp = CIBlockProperty::GetList(
        [
            "SORT" => "ASC",
            "NAME" => "ASC",
        ],
        [
            "ACTIVE" => "Y",
            "IBLOCK_ID" => $arCurrentValues["IBLOCK_ID"],
        ]
    );
    while ($arr = $rsProp->Fetch())
    {
        $arProperties[$arr["CODE"]] = "[" . $arr["CODE"] . "] " . $arr["NAME"];
    }
}


/* =========================== BASE PARAMS =========================== */
$arComponentParameters = [
    'GROUPS' => [
        'SETTINGS' => [
            'NAME' => Loc::getMessage('CONTENT_BLOCK.PARAMETERS.GROUP_NAME.SETTINGS'),
            'SORT' => 200
        ],
        'DATA_SOURCE' => [
            'NAME' => Loc::getMessage('CONTENT_BLOCK.PARAMETERS.GROUP_NAME.DATA_SOURCE'),
            'SORT' => 100
        ]
    ],
    "PARAMETERS" => [
        "IBLOCK_TYPE" => [
            "PARENT" => "SETTINGS",
            "NAME" => Loc::getMessage('CONTENT_BLOCK.PARAMETERS.PARAMETER.IBLOCK_TYPE'),
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
        "NAME" => Loc::getMessage('CONTENT_BLOCK.PARAMETERS.PARAMETER.IBLOCK'),
        "TYPE" => "LIST",
        "VALUES" => $arIblocks,
        "REFRESH" => "Y",
    ];
}

if ($isCorrectType && $isCorrectIBlock)
{
    $arComponentParameters["PARAMETERS"]["SECTION_ID"] = [
        "PARENT" => "SETTINGS",
        "NAME" => Loc::getMessage('CONTENT_BLOCK.PARAMETERS.PARAMETER.IBLOCK_SECTION'),
        "TYPE" => "LIST",
        'VALUES' => $arIblockSections,
    ];

    $arComponentParameters['PARAMETERS']['IBLOCK_PROPERTIES'] = [
        'PARENT' => 'DATA_SOURCE',
        'NAME' => Loc::getMessage('CONTENT_BLOCK.PARAMETERS.PARAMETER.PROPERTIES'),
        'TYPE' => 'LIST',
        'MULTIPLE' => 'Y',
        'VALUES' => $arProperties,
    ];
}