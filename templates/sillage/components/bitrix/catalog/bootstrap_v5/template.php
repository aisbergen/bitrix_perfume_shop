<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>


<div class="catalog-sections">
    <?php foreach ($arResult['SECTIONS'] as $arSection): ?>
        <div class="catalog-section">
            <h2 class="catalog-title"><?= $arSection["NAME"] ?></h2>
            <?php if ($arSection["PICTURE"]["SRC"]): ?>
                <img src="<?= $arSection["PICTURE"]["SRC"] ?>" alt="<?= $arSection["NAME"] ?>" />
            <?php endif; ?>
        </div>
    <?php endforeach; ?>
</div>