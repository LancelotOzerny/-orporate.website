<?php
B_PROLOG_INCLUDED === true || die();

class CookieBannerComponent extends CBitrixComponent
{
    public function onPrepareComponentParams($arParams) : array
    {
        $arParams['COOKIE_LIFETIME'] ??= 365;
        $arParams['PRIVACY_POLICY_LINK'] ??= '';
        $arParams['ACCEPTED'] = $this->isCookieAccepted();

        return $arParams;
    }
    
    public function initResult() : void
    {
        $this->arResult = [
            'COOKIE_LIFETIME' => $this->arParams['COOKIE_LIFETIME'],
            'PRIVACY_POLICY_LINK' => $this->arParams['PRIVACY_POLICY_LINK'],
            'ACCEPTED' => $this->arParams['ACCEPTED'],
        ];
    }

    public function executeComponent()
    {
        $this->initResult();
        $this->includeComponentTemplate();
    }

    protected function isCookieAccepted()
    {
        if (isset($_COOKIE['COOKIE_BANNER_ACCEPTED']) && $_COOKIE['COOKIE_BANNER_ACCEPTED'] === 'Y')
        {
            return 'Y';
        }

        return 'N';
    }
}