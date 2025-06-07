<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<php $APPLICATION->SetAdditionalCSS($templateFolder."/style.css") ?>


    <div class="catalog-sections">
        <?php foreach ($arResult['SECTIONS'] as &$arSection): ?>
            <a class="catalog-section-link" href="<?= $arSection["SECTION_PAGE_URL"] ?>">
                <?= $arSection["NAME"] ?> (<?= $arSection["ELEMENT_CNT"] ?>)
            </a>
        <?php endforeach; ?>
    </div>