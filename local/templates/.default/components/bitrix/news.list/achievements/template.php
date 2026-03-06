<?php B_PROLOG_INCLUDED === true || die();

/** @var array $arResult */
/** @var array $arParams */

use Bitrix\Main\Localization\Loc;

Loc::loadMessages(__FILE__);

if (empty($arResult['ITEMS']))
{
    return;
}
?>

<h2 class="section_title"><?= $arResult['NAME'] ?></h2>

<?php if($arResult['DESCRIPTION'] ?? null): ?>
    <p class="text-center lead mb-5"><?= $arResult['DESCRIPTION'] ?></p>
<?php endif; ?>

<div class="row g-4">
    <?php foreach ($arResult['ITEMS'] as $item): ?>
    <?php $modifier = $item['DISPLAY_PROPERTIES']['UF_ICON_MODIFIER']['DISPLAY_VALUE'] ?? '' ?>
    <div class="col-md-4">
        <div class="card h-100">
            <div class="card-body text-center">
                <i class="bi <?= $modifier ?> card-icon"></i>
                <h3 class="card-title"><?= $item['NAME'] ?></h3>
                <?php if($item['DISPLAY_PROPERTIES']['UF_SUBTITLE']): ?>
                    <p class="text-muted mb-2"><?= $item['DISPLAY_PROPERTIES']['UF_SUBTITLE']['DISPLAY_VALUE'] ?></p>
                <?php endif; ?>
                <p class="card-text"><?= $arResult['PREVIEW_TEXT'] ?></p>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>