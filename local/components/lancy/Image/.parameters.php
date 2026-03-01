<?php
B_PROLOG_INCLUDED === true || die();

use Bitrix\Main\Localization\Loc;

/** @var array $arCurrentValues */


$arComponentParameters = [
    'GROUPS' => [
        'BASE' => [
            'NAME' => Loc::getMessage('IMAGE.COMPONENT.PARAMS.GROUP_BASE'),
            'SORT' => 100,
        ],
        'CHOOSE' => [
            'NAME' => Loc::getMessage('IMAGE.COMPONENT.PARAMS.GROUP_CHOOSE'),
            'SORT' => 200,
        ],
        'VISUAL' => [
            'NAME' => Loc::getMessage('IMAGE.COMPONENT.PARAMS.GROUP_VISUAL'),
            'SORT' => 300
        ],
    ],

    'PARAMETERS' => [
        'TYPE' => [
            'PARENT' => 'BASE',
            'NAME' => Loc::getMessage('IMAGE.COMPONENT.PARAMS.TYPE_NAME'),
            'TYPE' => 'LIST',
            'REFRESH' => 'Y',
            'VALUES' => [
                'LINK' => Loc::getMessage('IMAGE.COMPONENT.PARAMS.TYPE_VALUE_LINK'),
                'MEDIA_LIBRARY' => Loc::getMessage('IMAGE.COMPONENT.PARAMS.TYPE_VALUE_MEDIA'),
            ]
        ],
        'ALT' => [
            'PARENT' => 'VISUAL',
            'NAME' => Loc::getMessage('IMAGE.COMPONENT.PARAMS.ALT_NAME'),
            'TYPE' => 'STRING',
            'VALUE' => '',
        ],
        'WIDTH' => [
            'PARENT' => 'VISUAL',
            'NAME' => Loc::getMessage('IMAGE.COMPONENT.PARAMS.WIDTH_NAME'),
            'TYPE' => 'STRING',
            'VALUE' => '',
        ],
        'HEIGHT' => [
            'PARENT' => 'VISUAL',
            'NAME' => Loc::getMessage('IMAGE.COMPONENT.PARAMS.HEIGHT_NAME'),
            'TYPE' => 'STRING',
            'VALUE' => '',
        ],
    ],
];


/* ===================== COLLECTIONS ===================== */
if(CModule::IncludeModule("fileman"))
{
    CMedialib::Init();
}

if ($arCurrentValues['TYPE'] === 'MEDIA_LIBRARY')
{
    $collections = CMedialibCollection::GetList();
    $arCollectionsList = [
        '0' => Loc::getMessage('IMAGE.COMPONENT.PARAMS.NOT_CHOOSE'),
    ];

    foreach ($collections as $collection)
        $arCollectionsList[$collection['ID']] = "[{$collection['ID']}] {$collection['NAME']}";

    $arComponentParameters['PARAMETERS']['COLLECTION'] = [
        'PARENT' => 'BASE',
        'NAME' => Loc::getMessage('IMAGE.COMPONENT.PARAMS.COLLECTION.NAME'),
        'TYPE' => 'LIST',
        'VALUES' => $arCollectionsList,
        'REFRESH' => 'Y',
    ];
}





/* ===================== IMAGES ===================== */
if ($arCurrentValues['TYPE'] === 'MEDIA_LIBRARY' && $arCurrentValues['COLLECTION'] > 0)
{
    $arCollectionItems = [
        '0' => Loc::getMessage('IMAGE.COMPONENT.PARAMS.NOT_CHOOSE'),
    ];

    $mediaItems = CMedialibItem::GetList(array(
        'types' => array([]),
        'arFilter' => array('collection' => $arCurrentValues['COLLECTION'])
    ));

    foreach ($mediaItems as $item)
        $arCollectionItems[$item['ID']] = "[{$item['ID']}] $item[NAME]";

    $arComponentParameters['PARAMETERS']['COLLECTION_ITEM'] = [
        'PARENT' => 'BASE',
        'NAME' => Loc::getMessage('IMAGE.COMPONENT.PARAMS.COLLECTION_ITEM'),
        'TYPE' => 'LIST',
        'VALUES' => $arCollectionItems,
    ];
}



/* ===================== LINK TYPE ===================== */
if ($arCurrentValues['TYPE'] === 'LINK')
{
    $arComponentParameters['PARAMETERS']['LINK_URL'] = [
        'PARENT' => 'BASE',
        'NAME' => Loc::getMessage('IMAGE.COMPONENT.PARAMS.LINK_URL_NAME'),
        'TYPE' => 'STRING,'
    ];
}