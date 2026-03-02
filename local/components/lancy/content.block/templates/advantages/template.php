<?php B_PROLOG_INCLUDED === true || die();
/** @var array $arResult */
/** @var array $arParams */

if (empty($arResult['ITEMS']))
{
    return;
}

$elements_modifiers = $arParams['ELEMENT_MODIFIER'] ?? '';
$element_class_modifiers = $elements_modifiers ? 'class="' . $elements_modifiers . '"' : '';
?>

<div class="row g-4">
    <?php foreach ($arResult['ITEMS'] as $item): ?>
    <div <?= $element_class_modifiers ?>>
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