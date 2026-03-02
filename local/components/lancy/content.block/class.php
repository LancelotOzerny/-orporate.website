<?php B_PROLOG_INCLUDED === true || die();

class ContentBlockComponent extends CBitrixComponent
{
    public function onPrepareComponentParams($arParams)
    {
        return $arParams;
    }

    public function executeComponent()
    {
        $this->includeComponentTemplate();
    }
}