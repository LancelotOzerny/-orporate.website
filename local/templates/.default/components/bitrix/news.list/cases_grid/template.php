<?php B_PROLOG_INCLUDED === true || die();

/** @var array $arResult */
/** @var array $arParams */

use Bitrix\Main\Localization\Loc;

Loc::loadMessages(__FILE__);

if (empty($arResult))
{
    return;
}

$showFilters = isset($arParams['SHOW_FILTERS']) && $arParams['SHOW_FILTERS'] === 'Y';
$showSectionName = isset($arParams['SHOW_SECTION_NAME']) && $arParams['SHOW_SECTION_NAME'] === 'Y';
$elementModifier = $arParams['ELEMENT_MODIFIER'] ?? '';
?>


<?php if($arResult['FILTERS'] && $showFilters): ?>
<div class="text-center mb-5">
    <button class="btn btn-outline-primary m-2 case-filter active" data-filter="all>"><?= Loc::getMessage('ALL_PROJECTS') ?></button>
    <?php foreach ($arResult['FILTERS'] as $key => $value): ?>
        <button class="btn btn-outline-primary m-2 case-filter" data-filter="section-<?= $key ?>"><?= $value ?></button>
    <?php endforeach; ?>
</div>
<?php endif; ?>

<div class="row g-4" id="cases-grid">
    <?php foreach ($arResult['ITEMS'] as $item): ?>
    <div class="<?= $elementModifier ?> case-item" data-category="section-<?= $item['IBLOCK_SECTION_ID'] ?>">
            <div class="card h-100">
                <?php if($item['PREVIEW_PICTURE']): ?>
                <img src="<?= $item['PREVIEW_PICTURE']['SAFE_SRC'] ?>" alt="<?= $item['PREVIEW_PICTURE']['ALT'] ?>" class="card-img-top">
                <?php endif; ?>

                <div class="card-body">
                    <?php if($showSectionName): ?>
                        <span class="badge bg-<?= $item['PARENT_SECTION']['UF_BG_COLOR'] ?> mb-3"><?= $item['PARENT_SECTION']['NAME'] ?></span>
                    <?php endif; ?>

                    <h3 class="card-title"><?= $item['NAME'] ?></h3>
                    <p class="card-text"><?= $item['PREVIEW_TEXT'] ?></p>

                    <?php if($item['DISPLAY_PROPERTIES']['UF_RESULTS']): ?>
                    <div class="mb-3">
                        <strong class="mb-3"><?= $item['DISPLAY_PROPERTIES']['UF_RESULTS']['NAME'] ?>:</strong>
                        <?= $item['DISPLAY_PROPERTIES']['UF_RESULTS']['DISPLAY_VALUE'] ?>
                    </div>
                    <?php endif; ?>

                    <div class="mb-3">
                        <?php foreach ($item['TAGS'] as $tag): ?>
                            <span class="tech-badge"><?= $tag ?></span>
                        <?php endforeach; ?>
                    </div>

                    <a href="<?= $item['DETAIL_PAGE_URL'] ?>" class="btn btn-outline-primary" data-bs-toggle="modal"><?= Loc::getMessage('BUTTON_MORE') ?></a>
                </div>
            </div>
    </div>
    <?php endforeach; ?>
</div>