<?php
B_PROLOG_INCLUDED === true || die();

use Bitrix\Main\Localization\Loc;

/** @var array $arCurrentValues */


$arComponentParameters = [
    'GROUPS' => [
        'BASE' => [
            'NAME' => 'Базовые параметры',
            'SORT' => 100,
        ],
        'CHOOSE' => [
            'NAME' => 'Выбор изображения',
            'SORT' => 200,
        ],
        'VISUAL' => [
            'NAME' => 'Внешний вид',
            'SORT' => 300
        ],
    ],

    'PARAMETERS' => [
        'TYPE' => [
            'PARENT' => 'BASE',
            'NAME' => 'Тип изображения',
            'TYPE' => 'LIST',
            'REFRESH' => 'Y',
            'VALUES' => [
                'LINK' => 'Ссылка',
                'MEDIA_LIBRARY' => 'Медиабиблиотека',
            ]
        ],
        'ALT' => [
            'PARENT' => 'VISUAL',
            'NAME' => 'Заголовок',
            'TYPE' => 'STRING',
            'VALUE' => '',
        ],
        'WIDTH' => [
            'PARENT' => 'VISUAL',
            'NAME' => 'Ширина',
            'TYPE' => 'STRING',
            'VALUE' => '',
        ],
        'HEIGHT' => [
            'PARENT' => 'VISUAL',
            'NAME' => 'Высота',
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
        '0' => 'Не выбрано'
    ];

    foreach ($collections as $collection)
        $arCollectionsList[$collection['ID']] = "[{$collection['ID']}] {$collection['NAME']}";

    $arComponentParameters['PARAMETERS']['COLLECTION'] = [
        'PARENT' => 'BASE',
        'NAME' => 'Коллекция',
        'TYPE' => 'LIST',
        'VALUES' => $arCollectionsList,
        'REFRESH' => 'Y',
    ];
}





/* ===================== IMAGES ===================== */
if ($arCurrentValues['TYPE'] === 'MEDIA_LIBRARY' && $arCurrentValues['COLLECTION'] > 0)
{
    $arCollectionItems = [
        '0' => 'Не выбрано'
    ];

    $mediaItems = CMedialibItem::GetList(array(
        'types' => array([]),
        'arFilter' => array('collection' => $arCurrentValues['COLLECTION'])
    ));

    foreach ($mediaItems as $item)
        $arCollectionItems[$item['ID']] = "[{$item['ID']}] $item[NAME]";

    $arComponentParameters['PARAMETERS']['COLLECTION_ITEM'] = [
        'PARENT' => 'BASE',
        'NAME' => 'Коллекция',
        'TYPE' => 'LIST',
        'VALUES' => $arCollectionItems,
    ];
}



/* ===================== LINK TYPE ===================== */
if ($arCurrentValues['TYPE'] === 'LINK')
{
    $arComponentParameters['PARAMETERS']['LINK_URL'] = [
        'PARENT' => 'BASE',
        'NAME' => 'Ссылка на изображение',
        'TYPE' => 'STRING,'
    ];
}