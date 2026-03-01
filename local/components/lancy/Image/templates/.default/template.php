<?php
B_PROLOG_INCLUDED === true || die();

/** @var array $arResult */

use Bitrix\Main\Localization\Loc;

$url = $arResult['URL'] ? "src='{$arResult['URL']}'" : '';
$alt = $arResult['ALT'] ? "alt='{$arResult['ALT']}'" : '';
$width = $arResult['WIDTH'] ? "width='{$arResult['WIDTH']}'" : '';
$height = $arResult['HEIGHT'] ? "height='{$arResult['HEIGHT']}'" : '';

if($url)
{
    echo "<img {$url} {$alt} {$width} {$height}>";
}