<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Поиск");
?>
<?$APPLICATION->IncludeComponent(
	"bitrix:search.page", 
	"search", 
	array(
		"RESTART" => "Y",
		"NO_WORD_LOGIC" => "Y",
		"CHECK_DATES" => "N",
		"USE_TITLE_RANK" => "Y",
		"DEFAULT_SORT" => "rank",
		"FILTER_NAME" => "",
		"arrFILTER" => array(
			0 => "iblock_aspro_max_catalog",
		),
		"arrFILTER_iblock_aspro_max_catalog" => array(
			0 => "28",
			1 => "30",
		),
		"arrFILTER_iblock_aspro_max_content" => array(
			0 => "22",
			1 => "23",
			2 => "24",
			3 => "32",
		),
		"SHOW_WHERE" => "N",
		"SHOW_WHEN" => "N",
		"PAGE_RESULT_COUNT" => "20",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "Y",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "3600",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "Результаты поиска",
		"PAGER_SHOW_ALWAYS" => "Y",
		"PAGER_TEMPLATE" => "",
		"USE_LANGUAGE_GUESS" => "Y",
		"USE_SUGGEST" => "Y",
		"SHOW_RATING" => "Y",
		"RATING_TYPE" => "like_graphic",
		"PATH_TO_USER_PROFILE" => "",
		"AJAX_OPTION_ADDITIONAL" => "",
		"COMPONENT_TEMPLATE" => "search",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"SHOW_ITEM_TAGS" => "Y",
		"TAGS_INHERIT" => "Y",
		"SHOW_ITEM_DATE_CHANGE" => "Y",
		"SHOW_ORDER_BY" => "Y",
		"SHOW_TAGS_CLOUD" => "N"
	),
	false
);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>