<?php B_PROLOG_INCLUDED === true || die();

/** @var array $arResult */
/** @var array $arParams */

use Bitrix\Main\Localization\Loc;

Loc::loadMessages(__FILE__);

if (empty($arResult['ITEMS']))
{
    return;
}

$isRight = false;
?>

<div class="timeline">
    <?php foreach ($arResult['ITEMS'] as $item): ?>
        <?php $props = $item['DISPLAY_PROPERTIES']; ?>
        <div class="timeline-item">
            <div class="timeline-marker"></div>
            <div class="timeline-content">
                <div class="row align-items-center">
                    <div class="col-md-6 <?= $isRight ? 'order-md-2' : '' ?>">
                        <?php if($props['UF_YEAR'] ?? null): ?>
                            <div class="timeline-year"><?= $props['UF_YEAR']['DISPLAY_VALUE'] ?></div>
                        <?php endif; ?>

                        <?php if($item['NAME'] ?? null): ?>
                            <h3><?= $item['NAME'] ?></h3>
                        <?php endif; ?>
                        <?php if($item['PREVIEW_TEXT'] ?? null): ?>
                            <p><?= $item['PREVIEW_TEXT'] ?></p>
                        <?php endif; ?>

                        <?php if(($props['ACHIEVEMENT_1'] ?? null) || ($props['ACHIEVEMENT_2'] ?? null) || ($props['ACHIEVEMENT_3'] ?? null)): ?>
                        <ul class="list-unstyled">
                            <?php if($props['ACHIEVEMENT_1'] ?? null): ?>
                            <li>
                                <i class="bi bi-check-circle text-primary me-2"></i>
                                <?= $props['ACHIEVEMENT_1']['DISPLAY_VALUE'] ?>
                            </li>
                            <?php endif; ?>

                            <?php if($props['ACHIEVEMENT_2'] ?? null): ?>
                            <li>
                                <i class="bi bi-check-circle text-primary me-2"></i>
                                <?= $props['ACHIEVEMENT_2']['DISPLAY_VALUE'] ?>
                            </li>
                            <?php endif; ?>

                            <?php if($props['ACHIEVEMENT_3'] ?? null): ?>
                            <li>
                                <i class="bi bi-check-circle text-primary me-2"></i>
                                <?= $props['ACHIEVEMENT_3']['DISPLAY_VALUE'] ?>
                            </li>
                            <?php endif; ?>
                        </ul>
                        <?php endif; ?>
                    </div>

                    <?php if($item['PREVIEW_PICTURE'] ?? null): ?>
                        <div class="col-md-6 order-md-1">
                            <img src="<?= $item['PREVIEW_PICTURE']['SAFE_SRC'] ?>" alt="<?= $item['PREVIEW_PICTURE']['ALT'] ?>" class="img-fluid rounded shadow">
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    <?php $isRight = !$isRight; ?>
    <?php endforeach; ?>
</div>
