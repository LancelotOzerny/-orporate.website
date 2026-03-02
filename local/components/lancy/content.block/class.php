<?php B_PROLOG_INCLUDED === true || die();

class ContentBlockComponent extends CBitrixComponent
{
    public function onPrepareComponentParams($arParams)
    {
        $arResult = [];
        $arResult['IBLOCK_TYPE'] = $arParams['IBLOCK_TYPE'] ?? '';
        $arResult['IBLOCK_ID'] = $arParams['IBLOCK_ID'] ?? '';
        $arResult['SECTION_ID'] = $arParams['SECTION_ID'] ?? '';
        $arResult['ITEMS'] = [];

        if (!CModule::IncludeModule("iblock"))
        {
            $this->arResult = $arResult;
            return $arResult;
        }

        if ($arResult['SECTION_ID'] && $arResult['IBLOCK_ID'] && $arResult['IBLOCK_TYPE'])
        {
            $arFilter = [
                "IBLOCK_ID" => $arResult['IBLOCK_ID'],
                "IBLOCK_SECTION_ID" => $arResult['SECTION_ID'],
                "ACTIVE_DATE"=>"Y",
                "ACTIVE"=>"Y"
            ];

            $res = CIBlockElement::GetList(Array(), $arFilter);
            while($ob = $res->GetNextElement())
            {
                $arFields = $ob->GetFields();
                $arResult['ITEMS'][] = $arFields;
            }
        }

        $this->arResult = $arResult;
        return $arResult;
    }

    public function executeComponent()
    {
        $this->includeComponentTemplate();
    }
}