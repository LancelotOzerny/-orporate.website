<?php
/** @var array $arResult */

if (empty($arResult['ITEMS']))
{
    return;
}
?>

<div class="items-list" style="display: grid; grid-gap: 25px">
<?php foreach ($arResult['ITEMS'] as $item): ?>
    <article class="item-list__element" style="padding: 25px; box-shadow: 0 0 4px #222; border-radius: 5px">
        <header style="font-size: 1.5rem; font-weight: 300"><?= $item['NAME'] ?></header>
        <p class="item-list__title" style="margin-top: 25px"><?= $item['PREVIEW_TEXT'] ?></p>
    </article>
<?php endforeach; ?>
</div>

