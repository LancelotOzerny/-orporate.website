<?php
B_PROLOG_INCLUDED === true || die();

/** @var array $arResult */

use Bitrix\Main\Localization\Loc;
?>

<div id="cookie-banner" class="cookie-banner">
    <div class="cookie-banner__content">
        <p><?= Loc::getMessage('COOKIE_BANNER.DEFAULT.MESSAGE') ?></p>
        <button id="cookie-accept" class="btn btn-primary"><?= Loc::getMessage('COOKIE_BANNER.DEFAULT.APPLY_BUTTON_TEXT') ?></button>
    </div>
</div>