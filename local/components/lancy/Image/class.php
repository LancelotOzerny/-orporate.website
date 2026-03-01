<?php
B_PROLOG_INCLUDED === true || die();

class ImageComponent extends CBitrixComponent
{
    public function onPrepareComponentParams($arParams) : array
    {
        return $arParams;
    }

    public function executeComponent()
    {
        $this->includeComponentTemplate();
    }
}