<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<div class="slider-wrapper">
	<div class="slider-arrow left" onclick="scrollSlider(-1)">&#10094;</div>
	<div class="slider-arrow right" onclick="scrollSlider(1)">&#10095;</div>

	<ul class="index_slider" id="indexSlider">
		<? if ($arResult["ITEMS"]): ?>
			<? foreach ($arResult["ITEMS"] as $arItem): ?>
				<?
				$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
				$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
				$arProps = $arItem["PROPERTIES"];
				?>
				<li id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
					<div class="index_slider_el" style="background-image:url('<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>');">
						<div class="standart index_slider_cont">
							<div class="ind_slid_txt_bl">
								<div class="ind_slid_title"><?= $arItem["NAME"] ?></div>
								<div class="ind_slid_txt"><?= $arItem["PREVIEW_TEXT"] ?></div>
								<a class="ind_red_bt" href="#">Узнать подробнее</a>
							</div>
							<div class="ind_slid_img">
								<img src="<?= SITE_TEMPLATE_PATH ?>/img/index_slider1.png" alt="" />
							</div>
						</div>
					</div>
				</li>
			<? endforeach; ?>
		<? endif; ?>
	</ul>
</div>