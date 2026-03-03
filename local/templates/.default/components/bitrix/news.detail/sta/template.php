<?php B_PROLOG_INCLUDED === true || die();

/** @var array $arResult */
/** @var array $arParams */

use Bitrix\Main\Localization\Loc;

Loc::loadMessages(__FILE__);

if (empty($arResult))
{
    return;
}

$buttons_count = (int)$arResult['BUTTONS']['COUNT'];
$isCenter = ($arResult['BUTTONS']['ON_CENTER'] ?? 'N') === 'Y';
?>
<h2 class="mb-4"><?= $arResult['NAME'] ?></h2>
<p class="lead mb-4"><?= $arResult['DISPLAY_PROPERTIES']['UF_SUBTITLE']['DISPLAY_VALUE'] ?></p>
<p><?= $arResult['PREVIEW_TEXT'] ?></p>

<?php if($arResult['BUTTONS']['COUNT'] > 0): ?>
<div class="d-flex gap-3 <?= $isCenter ? 'justify-content-center' : '' ?> flex-wrap">
    <?php for ($i = 0; $i < $buttons_count; ++$i): ?>
        <a href="<?= $arResult['BUTTONS']['ITEMS'][$i]['LINK'] ?>" class="btn btn-<?= $i > 0 ? 'outline-' : '' ?>primary">
            <?php if($modifier = $arResult['BUTTONS']['ITEMS'][$i]["MODIFIER"]): ?>
                <i class='bi bi-<?= $modifier ?> me-2'></i>
            <?php endif; ?>
            <?= $arResult['BUTTONS']['ITEMS'][$i]['TEXT']; ?>
        </a>
    <?php endfor; ?>
</div>
<?php endif; ?>