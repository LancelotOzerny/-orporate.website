<?php
B_PROLOG_INCLUDED === true || die();

/** @var array $arResult */

use Bitrix\Main\Localization\Loc;

if ($arResult['ACCEPTED'] === 'Y')
{
    return;
}
?>

<div class="cookie-banner" id="cookie-banner">
    <div class="cookie-banner__inner">
        <div class="cookie-banner__text">
            <?= Loc::getMessage('COOKIE_BANNER.DEFAULT.MESSAGE') ?>

            <?php if($arResult['PRIVACY_POLICY_LINK']): ?>
            <a href="<?= $arResult['PRIVACY_POLICY_LINK'] ?>" class="cookie-banner__link" target="_blank" rel="noopener">
                <?= Loc::getMessage('COOKIE_BANNER.DEFAULT.POLICY_LINK_TITLE') ?>
            </a>
            <?php endif; ?>
        </div>
        <button class="cookie-banner__btn" type="button" id="cookie-banner-accept">
            <?= Loc::getMessage('COOKIE_BANNER.DEFAULT.APPLY_BUTTON_TEXT') ?>
        </button>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        var btn = document.getElementById('cookie-banner-accept');
        var banner = document.getElementById('cookie-banner');

        if (!btn || !banner)
        {
            return;
        }

        <?php
            echo 'let lifetime = ' . $arResult['COOKIE_LIFETIME'] . ';';
        ?>

        btn.addEventListener('click', function () {
            banner.classList.add('hidden');

            var date = new Date();
            date.setDate(date.getDate() + lifetime);
            document.cookie = "COOKIE_BANNER_ACCEPTED=Y; path=/; expires=" + date.toUTCString();
        });
    });
</script>