<?php
/** @var array $arResult */

if (!Loader::includeModule('iblock'))
{
    $this->abortResultShow("Модуль iblock не подключён");
}

echo '<pre>';
print_r($arResult);
echo '</pre>';