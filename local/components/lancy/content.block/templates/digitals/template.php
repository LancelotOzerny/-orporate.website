<?php
/** @var array $arResult */

if (empty($arResult['ITEMS']))
{
    return;
}
?>

<?php if($arResult['SECTION']['NAME'] ?? null): ?>
    <h2 class="section_title"><?= $arResult['SECTION']['NAME'] ?></h2>
<?php endif; ?>

<div class="row g-4">
<?php foreach ($arResult['ITEMS'] as $item): ?>
    <div class="col-md-3 col-sm-6">
        <div class="stat-card">
            <div class="stat-number"><?= $item['NAME'] ?></div>
            <div class="stat-label"><?= $item['PREVIEW_TEXT'] ?></div>
        </div>
    </div>
<?php endforeach; ?>
</div>