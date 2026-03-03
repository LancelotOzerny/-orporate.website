<?php B_PROLOG_INCLUDED === true || die();
/** @var array $arResult */

if (empty($arResult))
{
    return;
}
?>

<section class="section bg-light">
    <div class="container">
        <?php if($arResult['FILTERS']): ?>
        <div class="text-center mb-5">
            <button class="btn btn-outline-primary m-2 case-filter active" data-filter="all>">Все проекты</button>
            <?php foreach ($arResult['FILTERS'] as $key => $value): ?>
                <button class="btn btn-outline-primary m-2 case-filter" data-filter="section-<?= $key ?>"><?= $value ?></button>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>

        <div class="row g-4" id="cases-grid">
            <?php foreach ($arResult['ITEMS'] as $item): ?>
            <div class="col-lg-6 case-item" data-category="section-<?= $item['IBLOCK_SECTION_ID'] ?>">
                    <div class="card h-100">
                        <?php if($item['PREVIEW_PICTURE']): ?>
                        <img src="<?= $item['PREVIEW_PICTURE']['SAFE_SRC'] ?>" alt="<?= $item['PREVIEW_PICTURE']['ALT'] ?>" class="card-img-top">
                        <?php endif; ?>

                        <div class="card-body">
                            <span class="badge bg-<?= $item['PARENT_SECTION']['UF_BG_COLOR'] ?> mb-3"><?= $item['PARENT_SECTION']['NAME'] ?></span>
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
                            <a href="#case-modal-1" class="btn btn-outline-primary" data-bs-toggle="modal">Подробнее</a>
                        </div>
                    </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>