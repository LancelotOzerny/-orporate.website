<?php B_PROLOG_INCLUDED === true || die();
/** @var array $arResult */

if (empty($arResult['ITEMS']))
{
    return;
}
?>

<div class="row g-4">
    <?php foreach ($arResult['ITEMS'] as $item): ?>
    <div class="col-md-6 col-lg-4">
        <div class="card h-100">
            <div class="card-body text-center">
                <i class="bi bi-<?= $item['PROPERTY_UF_MODIFIER_VALUE'] ?> card-icon"></i>
                <h3 class="card-title"><?= $item['NAME'] ?></h3>
                <p class="card-text"><?= $item['PREVIEW_TEXT'] ?></p>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>