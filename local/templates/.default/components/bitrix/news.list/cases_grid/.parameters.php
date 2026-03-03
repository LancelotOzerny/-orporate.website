<?php B_PROLOG_INCLUDED === true || die();

/** @var array $arCurrentValues */

$arTemplateParameters = [];

// Отобразить название секции в виде тега
// Модификатор элемента
// Показать фильтры

$arTemplateParameters['ELEMENT_MODIFIER'] = [
    'PARENT' => 'DATA_SOURCE',
    'NAME' => 'Модификаторы элемента',
    'TYPE' => 'STRING',
];

$arTemplateParameters['SHOW FILTERS'] = [
    'PARENT' => 'DATA_SOURCE',
    'NAME' => 'Отобразить фильтрацию',
    'TYPE' => 'CHECKBOX',
    'DEFAULT' => 'Y',
];

$arTemplateParameters['SHOW_SECTION_NAME'] = [
    'PARENT' => 'DATA_SOURCE',
    'NAME' => 'Показать название секции',
    'TYPE' => 'CHECKBOX',
    'DEFAULT' => 'Y',
];