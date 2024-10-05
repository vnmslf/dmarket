<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Новости");
?>
<?$APPLICATION->IncludeComponent(
	"bitrix:news", 
	"news", 
	array(
		"IBLOCK_TYPE" => "aspro_max_content",
		"IBLOCK_ID" => "23",
		"NEWS_COUNT" => "6",
		"USE_SEARCH" => "N",
		"USE_RSS" => "Y",
		"USE_RATING" => "N",
		"USE_CATEGORIES" => "N",
		"USE_FILTER" => "Y",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_ORDER1" => "DESC",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"CHECK_DATES" => "Y",
		"SEF_MODE" => "Y",
		"SEF_FOLDER" => "/company/news/",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "N",
		"SET_TITLE" => "Y",
		"SET_STATUS_404" => "Y",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"USE_PERMISSIONS" => "N",
		"PREVIEW_TRUNCATE_LEN" => "",
		"LIST_ACTIVE_DATE_FORMAT" => "j F Y",
		"LIST_FIELD_CODE" => array(
			0 => "NAME",
			1 => "PREVIEW_TEXT",
			2 => "PREVIEW_PICTURE",
			3 => "DATE_ACTIVE_FROM",
			4 => "DATE_ACTIVE_TO",
			5 => "ACTIVE_TO",
			6 => "",
		),
		"LIST_PROPERTY_CODE" => array(
			0 => "PERIOD",
			1 => "REDIRECT",
			2 => "",
		),
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"DISPLAY_NAME" => "N",
		"META_KEYWORDS" => "-",
		"META_DESCRIPTION" => "-",
		"BROWSER_TITLE" => "-",
		"DETAIL_ACTIVE_DATE_FORMAT" => "j F Y",
		"DETAIL_FIELD_CODE" => array(
			0 => "PREVIEW_TEXT",
			1 => "DETAIL_TEXT",
			2 => "DETAIL_PICTURE",
			3 => "DATE_ACTIVE_FROM",
			4 => "",
		),
		"DETAIL_PROPERTY_CODE" => array(
			0 => "LINK_GOODS",
			1 => "FORM_QUESTION",
			2 => "FORM_ORDER",
			3 => "PERIOD",
			4 => "PHOTOPOS",
			5 => "LINK_SERVICES",
			6 => "PHOTOS",
			7 => "DOCUMENTS",
			8 => "",
		),
		"DETAIL_DISPLAY_TOP_PAGER" => "N",
		"DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
		"DETAIL_PAGER_TITLE" => "Страница",
		"DETAIL_PAGER_TEMPLATE" => "",
		"DETAIL_PAGER_SHOW_ALL" => "Y",
		"PAGER_TEMPLATE" => "main",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "Новости",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"IMAGE_POSITION" => "left",
		"USE_SHARE" => "Y",
		"AJAX_OPTION_ADDITIONAL" => "",
		"USE_REVIEW" => "N",
		"ADD_ELEMENT_CHAIN" => "N",
		"SHOW_DETAIL_LINK" => "Y",
		"S_ASK_QUESTION" => "",
		"S_ORDER_SERVISE" => "",
		"T_GALLERY" => "",
		"T_DOCS" => "",
		"T_GOODS" => "Товары",
		"T_SERVICES" => "",
		"T_STUDY" => "",
		"COMPONENT_TEMPLATE" => "news",
		"SET_LAST_MODIFIED" => "N",
		"T_VIDEO" => "",
		"DETAIL_SET_CANONICAL_URL" => "N",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"SHOW_404" => "Y",
		"MESSAGE_404" => "",
		"NUM_NEWS" => "20",
		"NUM_DAYS" => "30",
		"YANDEX" => "N",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"SECTION_ELEMENTS_TYPE_VIEW" => "FROM_MODULE",
		"ELEMENT_TYPE_VIEW" => "element_1",
		"S_ORDER_SERVICE" => "",
		"T_PROJECTS" => "",
		"T_REVIEWS" => "",
		"T_STAFF" => "",
		"IMAGE_CATALOG_POSITION" => "left",
		"SHOW_SECTION_PREVIEW_DESCRIPTION" => "Y",
		"SHOW_SECTION_DESCRIPTION" => "Y",
		"LINE_ELEMENT_COUNT" => "3",
		"LINE_ELEMENT_COUNT_LIST" => "4",
		"SHOW_CHILD_SECTIONS" => "N",
		"GALLERY_TYPE" => "small",
		"INCLUDE_SUBSECTIONS" => "Y",
		"FORM_ID_ORDER_SERVISE" => "",
		"T_MAX_LINK" => "",
		"T_PREV_LINK" => "",
		"SHOW_MAX_ELEMENT" => "N",
		"IMAGE_WIDE" => "N",
		"SHOW_FILTER_DATE" => "Y",
		"FILTER_NAME" => "arRegionLink",
		"FILTER_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"DETAIL_STRICT_SECTION_CHECK" => "N",
		"STRICT_SECTION_CHECK" => "N",
		"LIST_VIEW" => "slider",
		"LINKED_ELEMENST_PAGE_COUNT" => "20",
		"SHOW_DISCOUNT_PERCENT_NUMBER" => "N",
		"PRICE_CODE" => array(
			0 => "BASE",
		),
		"STORES" => array(
			0 => "",
			1 => "",
		),
		"HIDE_NOT_AVAILABLE" => "N",
		"FILE_404" => "",
		"SHOW_ASK_BLOCK" => "N",
		"SHOW_BORDER_ELEMENT" => "Y",
		"HIDE_BORDER_ELEMENT" => "N",
		"USE_BG_IMAGE_ALTERNATE" => "Y",
		"BG_POSITION" => "center",
		"TYPE_IMG" => "lg",
		"SIZE_IN_ROW" => "4",
		"TITLE_SHOW_FON" => "N",
		"SIDE_LEFT_BLOCK" => "LEFT",
		"TYPE_LEFT_BLOCK" => "1",
		"SIDE_LEFT_BLOCK_DETAIL" => "FROM_MODULE",
		"TYPE_LEFT_BLOCK_DETAIL" => "FROM_MODULE",
		"IBLOCK_LINK_NEWS_ID" => "23",
		"IBLOCK_LINK_SERVICES_ID" => "25",
		"IBLOCK_LINK_TIZERS_ID" => "12",
		"IBLOCK_LINK_REVIEWS_ID" => "21",
		"IBLOCK_LINK_STAFF_ID" => "18",
		"IBLOCK_LINK_VACANCY_ID" => "2",
		"IBLOCK_LINK_BLOG_ID" => "22",
		"IBLOCK_LINK_PROJECTS_ID" => "26",
		"IBLOCK_LINK_BRANDS_ID" => "32",
		"IBLOCK_LINK_LANDINGS_ID" => "22",
		"BLOCK_SERVICES_NAME" => "",
		"BLOCK_NEWS_NAME" => "",
		"BLOCK_TIZERS_NAME" => "",
		"BLOCK_REVIEWS_NAME" => "",
		"BLOCK_STAFF_NAME" => "",
		"BLOCK_VACANCY_NAME" => "",
		"BLOCK_PROJECTS_NAME" => "",
		"BLOCK_BRANDS_NAME" => "",
		"BLOCK_BLOG_NAME" => "",
		"BLOCK_LANDINGS_NAME" => "",
		"STAFF_TYPE_DETAIL" => "list",
		"DETAIL_BLOCKS_ALL_ORDER" => "tizers,desc,docs,char,services,blog,vacancy,news,form_order,goods,projects,reviews,gallery,brands,landings,staff,comments",
		"DETAIL_USE_COMMENTS" => "N",
		"DETAIL_BLOG_USE" => "N",
		"DETAIL_VK_USE" => "N",
		"DETAIL_FB_USE" => "N",
		"IBLOCK_LINK_PARTNERS_ID" => "27",
		"BLOCK_PARTNERS_NAME" => "",
		"DETAIL_LINKED_GOODS_SLIDER" => "Y",
		"SHOW_DISCOUNT_PERCENT" => "N",
		"SHOW_DISCOUNT_TIME" => "Y",
		"IBLOCK_LINK_SALE_ID" => "",
		"BLOCK_SALE_NAME" => "",
		"SHOW_MEASURE" => "N",
		"USE_SUBSCRIBE_IN_TOP" => "N",
		"TAGS_SECTION_COUNT" => "",
		"DISPLAY_LINKED_PAGER" => "Y",
		"MAX_GALLERY_ITEMS" => "5",
		"SHOW_GALLERY_GOODS" => "Y",
		"HIDE_NOT_AVAILABLE_OFFERS" => "N",
		"CONVERT_CURRENCY" => "N",
		"CURRENCY_ID" => "RUB",
		"ADD_DETAIL_TO_SLIDER" => "Y",
		"SHOW_ONE_CLICK_BUY" => "Y",
		"SHOW_OLD_PRICE" => "N",
		"SHOW_RATING" => "Y",
		"DISPLAY_WISH_BUTTONS" => "Y",
		"STIKERS_PROP" => "-",
		"SALE_STIKER" => "-",
		"SHOW_SECTIONS_FILTER" => "Y",
		"LINKED_PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"SHOW_COUNT_ELEMENTS" => "Y",
		"LINKED_ELEMENT_TAB_SORT_FIELD" => "sort",
		"LINKED_ELEMENT_TAB_SORT_ORDER" => "asc",
		"LINKED_ELEMENT_TAB_SORT_FIELD2" => "id",
		"LINKED_ELEMENT_TAB_SORT_ORDER2" => "desc",
		"SORT_REGION_PRICE" => "BASE",
		"SECTIONS_TAGS_DEPTH_LEVEL" => "2",
		"ADD_PICT_PROP" => "",
		"IBLOCK_CATALOG_TYPE" => "-",
		"IBLOCK_CATALOG_ID" => "1",
		"PRICE_VAT_INCLUDE" => "Y",
		"SEF_URL_TEMPLATES" => array(
			"news" => "",
			"section" => "",
			"detail" => "#ELEMENT_CODE#/",
			"rss" => "rss/",
			"rss_section" => "#SECTION_ID#/rss/",
		)
	),
	false
);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>