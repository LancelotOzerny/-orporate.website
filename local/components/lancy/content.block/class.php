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
            $properties = [];
            foreach ($arParams['IBLOCK_PROPERTIES'] ?? [] as $property)
            {
                $properties[] = 'PROPERTY_' . $property;
            }

            $arFilter = [
                "IBLOCK_ID" => $arResult['IBLOCK_ID'],
                "SECTION_ID" => $arResult['SECTION_ID'],
                "ACTIVE_DATE"=>"Y",
                "ACTIVE"=>"Y",
                'INCLUDE_SUBSECTIONS' => 'Y'
            ];

            $arSelect = array_merge($properties, [
                "ID", "IBLOCK_ID", "IBLOCK_SECTION_ID", "NAME",
                "ACTIVE_FROM", "TIMESTAMP_X",
                "DETAIL_PAGE_URL", "LIST_PAGE_URL",
                "DETAIL_TEXT", "DETAIL_TEXT_TYPE",
                "PREVIEW_TEXT", "PREVIEW_TEXT_TYPE", "PREVIEW_PICTURE",
            ]);

            $res = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);
            while($ob = $res->GetNextElement())
            {
                $arResult['ITEMS'][] = $ob->GetFields();
            }
        }

        $this->arResult = $arResult;
        return $arParams;
    }

    public function executeComponent()
    {
        $this->includeComponentTemplate();
    }
}