<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

/** @var array $arResult */
/** @var array $arParams */

if (empty($items = $arResult['ITEMS']))
{
    return;
}
?>

<div class="accordion" id="contactFaq">
    <?php for ($i = 0, $len = count($items); $i < $len; ++$i): ?>
    <div class="accordion-item mb-3">
        <h3 class="accordion-header">
            <button class="accordion-button <?= $i === 0 ? '' : 'collapsed' ?>" type="button"
                    data-bs-toggle="collapse" data-bs-target="#faq<?= $i ?>"><?= $items[$i]['NAME'] ?></button>
        </h3>
        <div id="faq<?= $i ?>" class="accordion-collapse collapse <?= $i === 0 ? 'show' : '' ?>" data-bs-parent="#contactFaq">
            <div class="accordion-body">
                <?= $items[$i]['PREVIEW_TEXT'] ?>
            </div>
        </div>
    </div>
    <?php endfor; ?>
</div>