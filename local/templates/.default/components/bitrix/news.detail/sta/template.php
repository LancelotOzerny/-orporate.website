<?php B_PROLOG_INCLUDED === true || die();

/** @var array $arResult */
/** @var array $arParams */

use Bitrix\Main\Localization\Loc;

Loc::loadMessages(__FILE__);

if (empty($arResult))
{
    return;
}
?>

<div class="col-lg-8 mx-auto text-center">
    <h2 class="mb-4"><?= $arResult['NAME'] ?></h2>
    <p class="lead mb-4"><?= $arResult['DISPLAY_PROPERTIES']['UF_SUBTITLE']['DISPLAY_VALUE'] ?></p>
    <p><?= $arResult['PREVIEW_TEXT'] ?></p>

    <?php if($arResult['BUTTONS']['COUNT'] > 0): ?>
    <div class="d-flex gap-3 justify-content-center flex-wrap">
        <?php foreach ($arResult['BUTTONS']['ITEMS'] as $button): ?>
            <a href="<?= $button['LINK'] ?>" class="btn btn-primary btn-lg">
                <?php
                    $modifier = $button["ICON_MODIFIER"] ?: '';
                    echo "<i class='bi $modifier me-2'></i>";
                    echo $button['TEXT'];
                ?>
            </a>
        <?php endforeach; ?>
    </div>
    <?php endif; ?>
</div>