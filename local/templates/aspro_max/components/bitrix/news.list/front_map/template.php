<?if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();?>
<?$this->setFrameMode(true);?>
<?
$templateData = array(
	'MAP_ITEMS' => $arResult['MAP_ITEMS']
);
?>
<?if($arResult['ITEMS']):?>
	<div class="content_wrapper_block map_type_1 <?=$templateName;?>">
		<div class="maxwidth-theme">
	<?if($arParams['TITLE_BLOCK'] || $arParams['TITLE_BLOCK_ALL']):?>
		<div class="top_block">
			<?=Aspro\Functions\CAsproMax::showTitleH($arParams['TITLE_BLOCK']);?>
			<a href="<?=SITE_DIR.$arParams['ALL_URL'];?>" class="pull-right font_upper muted"><?=$arParams['TITLE_BLOCK_ALL'] ;?></a>
		</div>
	<?endif;?>
<?endif;?>