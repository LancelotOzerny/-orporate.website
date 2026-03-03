<?php B_PROLOG_INCLUDED === true || die();

/** @var array $arResult */
/** @var array $arParams */

$buttons_count = (int)($arParams['BUTTONS_COUNT'] ?? 0);
if ($buttons_count > 0)
{
    for ($i = 1; $i <= $buttons_count; $i++)
    {
        $arResult['BUTTONS']['ITEMS'][] = [
            'TEXT' => $arParams['BTN' . $i . '_TEXT'],
            'LINK' => $arParams['BTN' . $i . '_LINK'],
            'MODIFIER' => $arParams['BTN' . $i . '_ICON_MODIFIER'],
        ];
    }
}
$arResult['BUTTONS']['COUNT'] = $buttons_count;
$arResult['BUTTONS']['ON_CENTER'] = $arParams['BUTTONS_ON_CENTER'] ?? 'Y';