<?php
B_PROLOG_INCLUDED === true || die();

class ImageComponent extends CBitrixComponent
{
    public function onPrepareComponentParams($arParams) : array
    {
        $params = [
            'ALT' => $arParams['ALT'] ?? '',
            'WIDTH' => $arParams['WIDTH'] ?? '',
            'HEIGHT' => $arParams['HEIGHT'] ?? '',
        ];

        $params['URL'] = '';
        if ($arParams['TYPE'] === 'MEDIA_LIBRARY' && $arParams['COLLECTION_URL'])
        {
            $params['URL'] = $arParams['COLLECTION_URL'];
        }

        if ($arParams['TYPE'] === 'LINK' && $arParams['LINK_URL'])
        {
            $params['URL'] = $arParams['LINK_URL'];
        }

        $this->arResult = $params;
        return $params;
    }

    public function executeComponent()
    {
        $this->includeComponentTemplate();
    }
}