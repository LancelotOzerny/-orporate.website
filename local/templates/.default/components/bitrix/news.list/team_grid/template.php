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

<?php if(count($arResult['FILTERS'])): ?>
    <div class="team-filters text-center mb-5">
        <?php foreach ($arResult['FILTERS'] as $key => $value): ?>
            <button class="btn btn-outline-primary <?= ($key === 0 ? 'active' : '') ?>"
                    data-role="section-<?= $key ?>"><?= $value ?></button>
        <?php endforeach; ?>
    </div>
<?php endif; ?>

<?php foreach ($arResult['ITEMS'] as $section): ?>
    <div data-role="section-<?= $section['ID'] ?>" class="team-section mb-5">
        <h2 class="section_title"><?= $section['NAME'] ?></h2>
        <div class="row g-4">
            <?php foreach ($section['ITEMS'] as $key => $item): ?>
                <?php $props = $item['DISPLAY_PROPERTIES']; ?>
                <div class="col-md-4 team-card" data-role="section-<?= $section['ID'] ?>">
                    <div class="card h-100">
                        <?php if($item['PREVIEW_PICTURE']): ?>
                            <img class="card-img-top" alt="<?= $item['PREVIEW_PICTURE']['ALT'] ?>"
                                 src="<?= $item['PREVIEW_PICTURE']['SAFE_SRC'] ?>">
                        <?php endif; ?>

                        <div class="card-body text-center">
                            <h3 class="card-title"><?= $item['NAME'] ?></h3>
                            <p class="text-muted mb-2"><?= $props['UF_POSITION']['DISPLAY_VALUE'] ?></p>
                            <p class="card-text"><?= $props['UF_SPECIALIZATION']['DISPLAY_VALUE'] ?></p>

                            <?php if(
                                    ($props['UF_LINKEDIN_LINK']['VALUE'] ?? null)
                                    || ($props['UF_EMAIL_LINK']['VALUE'] ?? null)
                                    || ($props['UF_TELEGRAM_LINK']['VALUE'] ?? null)
                            ): ?>
                                <div class="mt-3">
                                    <?php if(!empty($props['UF_LINKEDIN_LINK']['VALUE'])): ?>
                                        <a href="<?= $props['UF_LINKEDIN_LINK']['DISPLAY_VALUE'] ?>" class="text-primary me-3">
                                            <i class="bi bi-linkedin"></i>
                                        </a>
                                    <?php endif; ?>

                                    <?php if(!empty($props['UF_EMAIL_LINK']['VALUE'])): ?>
                                        <a href="<?= $props['UF_EMAIL_LINK']['DISPLAY_VALUE'] ?>" class="text-primary me-3">
                                            <i class="bi bi-envelope"></i>
                                        </a>
                                    <?php endif; ?>

                                    <?php if(!empty($props['UF_TELEGRAM_LINK']['VALUE'])): ?>
                                        <a href="<?= $props['UF_TELEGRAM_LINK']['DISPLAY_VALUE'] ?>" class="text-primary me-3">
                                            <i class="bi bi-telegram"></i>
                                        </a>
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
<?php endforeach; ?>