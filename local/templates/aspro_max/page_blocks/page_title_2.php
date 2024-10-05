<div class="top-block-wrapper grey_block">
	<section class="page-top maxwidth-theme <?CMax::ShowPageProps('TITLE_CLASS');?>">
		<div id="navigation">
			<?$APPLICATION->IncludeComponent(
	"bitrix:breadcrumb", 
	"main", 
	array(
		"START_FROM" => "2",
		"PATH" => "",
		"SITE_ID" => "s1",
		"SHOW_SUBSECTIONS" => "N",
		"COMPONENT_TEMPLATE" => "main",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO"
	),
	false
);?>
		</div>
		<?$APPLICATION->ShowViewContent('section_bnr_h1_content');?>
		<div class="topic">
			<div class="topic__inner">
				<?=$APPLICATION->ShowViewContent('product_share')?>
				<div class="topic__heading">
					<h1 id="pagetitle"><?$APPLICATION->ShowTitle(false)?></h1><?$APPLICATION->ShowViewContent('more_text_title');?>
				</div>
			</div>
		</div>
	</section>
</div>