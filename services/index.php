<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Беспроцентная рассрочка на 3, 6 или 12 месяцев от Тинькофф - Дельта-Маркет");
$APPLICATION->SetPageProperty("keywords", "рассрочка, интернет-магазин");
$APPLICATION->SetTitle("Услуги и сервис");
?>
<?$APPLICATION->IncludeComponent(
	"bitrix:news", 
	"services", 
	array(
		"IBLOCK_TYPE" => "aspro_max_content",
		"IBLOCK_ID" => "25",
		"NEWS_COUNT" => "20",
		"USE_SEARCH" => "N",
		"USE_RSS" => "N",
		"USE_RATING" => "N",
		"USE_CATEGORIES" => "N",
		"USE_FILTER" => "Y",
		"FILTER_NAME" => "arRegionLink",
		"FILTER_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"SORT_BY1" => "SORT",
		"SORT_ORDER1" => "ASC",
		"SORT_BY2" => "ID",
		"SORT_ORDER2" => "DESC",
		"CHECK_DATES" => "Y",
		"SEF_MODE" => "Y",
		"SEF_FOLDER" => "/services/",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "100000",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "N",
		"SET_TITLE" => "Y",
		"SET_STATUS_404" => "Y",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "Y",
		"USE_PERMISSIONS" => "N",
		"PREVIEW_TRUNCATE_LEN" => "0",
		"LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"LIST_FIELD_CODE" => array(
			0 => "NAME",
			1 => "PREVIEW_TEXT",
			2 => "PREVIEW_PICTURE",
			3 => "",
		),
		"LIST_PROPERTY_CODE" => array(
			0 => "PRICE_OLD",
			1 => "PRICE",
			2 => "PROP_1",
			3 => "PROP_2",
			4 => "",
		),
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"DISPLAY_NAME" => "N",
		"META_KEYWORDS" => "-",
		"META_DESCRIPTION" => "-",
		"BROWSER_TITLE" => "-",
		"DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"DETAIL_FIELD_CODE" => array(
			0 => "PREVIEW_TEXT",
			1 => "DETAIL_TEXT",
			2 => "DETAIL_PICTURE",
			3 => "",
		),
		"DETAIL_PROPERTY_CODE" => array(
			0 => "LINK_BRANDS",
			1 => "LINK_VACANCY",
			2 => "FORM_QUESTION",
			3 => "FORM_ORDER",
			4 => "LINK_LANDINGS",
			5 => "LINK_NEWS",
			6 => "LINK_REVIEWS",
			7 => "LINK_PARTNERS",
			8 => "LINK_PROJECTS",
			9 => "LINK_GOODS",
			10 => "LINK_STAFF",
			11 => "LINK_BLOG",
			12 => "LINK_TIZERS",
			13 => "LINK_SERVICES",
			14 => "PROP_3",
			15 => "PROP_1",
			16 => "PROP_2",
			17 => "DOCUMENTS",
			18 => "PHOTOS",
			19 => "LINK_SALE",
			20 => "SIDE_IMAGE",
			21 => "",
		),
		"DETAIL_DISPLAY_TOP_PAGER" => "N",
		"DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
		"DETAIL_PAGER_TITLE" => "Страница",
		"DETAIL_PAGER_TEMPLATE" => "",
		"DETAIL_PAGER_SHOW_ALL" => "Y",
		"PAGER_TEMPLATE" => ".default",
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
		"ADD_ELEMENT_CHAIN" => "Y",
		"IMAGE_CATALOG_POSITION" => "left",
		"SHOW_DETAIL_LINK" => "Y",
		"S_ASK_QUESTION" => "",
		"S_ORDER_SERVICE" => "",
		"T_GALLERY" => "",
		"T_DOCS" => "",
		"T_GOODS" => "Товары",
		"T_SERVICES" => "Услуги",
		"T_PROJECTS" => "",
		"T_REVIEWS" => "",
		"T_STAFF" => "Получите консультацию специалиста",
		"COMPONENT_TEMPLATE" => "services",
		"SET_LAST_MODIFIED" => "N",
		"T_VIDEO" => "",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"VIEW_TYPE" => "row_block",
		"DETAIL_SET_CANONICAL_URL" => "N",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"SHOW_404" => "Y",
		"MESSAGE_404" => "",
		"VIEW_TYPE_SECTION" => "row_block",
		"SHOW_CHILD_SECTIONS" => "Y",
		"GALLERY_TYPE" => "small",
		"PREVIEW_REVIEW_TRUNCATE_LEN" => "255",
		"SECTIONS_TYPE_VIEW" => "FROM_MODULE",
		"SECTION_TYPE_VIEW" => "FROM_MODULE",
		"ELEMENT_TYPE_VIEW" => "element_1",
		"SHOW_SECTION_PREVIEW_DESCRIPTION" => "Y",
		"LINE_ELEMENT_COUNT" => "2",
		"SECTION_ELEMENTS_TYPE_VIEW" => "FROM_MODULE",
		"SHOW_SECTION_DESCRIPTION" => "Y",
		"LINE_ELEMENT_COUNT_LIST" => "3",
		"S_ORDER_SERVISE" => "",
		"FORM_ID_ORDER_SERVISE" => "",
		"T_MAX_LINK" => "",
		"T_PREV_LINK" => "",
		"SHOW_MAX_ELEMENT" => "N",
		"IMAGE_WIDE" => "N",
		"DETAIL_STRICT_SECTION_CHECK" => "N",
		"STRICT_SECTION_CHECK" => "N",
		"TIZERS_IBLOCK_ID" => "12",
		"LANDING_IBLOCK_ID" => "158",
		"LANDING_SECTION_COUNT" => "10",
		"LANDING_TITLE" => "Популярные категории",
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
		"SHOW_FILTER_DATE" => "Y",
		"SHOW_ASK_BLOCK" => "N",
		"SHOW_BORDER_ELEMENT" => "Y",
		"USE_BG_IMAGE_ALTERNATE" => "Y",
		"BG_POSITION" => "center",
		"TYPE_IMG" => "lg",
		"SIZE_IN_ROW" => "4",
		"TITLE_SHOW_FON" => "Y",
		"SIDE_LEFT_BLOCK" => "FROM_MODULE",
		"TYPE_LEFT_BLOCK" => "FROM_MODULE",
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
		"IBLOCK_LINK_LANDINGS_ID" => "19",
		"BLOCK_SERVICES_NAME" => "Услуги",
		"BLOCK_NEWS_NAME" => "Новости",
		"BLOCK_TIZERS_NAME" => "",
		"BLOCK_REVIEWS_NAME" => "Отзывы",
		"BLOCK_STAFF_NAME" => "Сотрудники",
		"BLOCK_VACANCY_NAME" => "Вакансии",
		"BLOCK_PROJECTS_NAME" => "Проекты",
		"BLOCK_BRANDS_NAME" => "Бренды",
		"BLOCK_BLOG_NAME" => "Статьи",
		"BLOCK_LANDINGS_NAME" => "Коллекции",
		"STAFF_TYPE_DETAIL" => "list",
		"DETAIL_BLOCKS_ALL_ORDER" => "tizers,form_order,desc,char,gallery,docs,services,news,vacancy,blog,reviews,goods,projects,partners,staff,brands,landings,comments",
		"DETAIL_USE_COMMENTS" => "N",
		"DETAIL_BLOG_USE" => "N",
		"DETAIL_VK_USE" => "N",
		"DETAIL_FB_USE" => "N",
		"HIDE_SECTION_NAME" => "Y",
		"IBLOCK_LINK_PARTNERS_ID" => "27",
		"BLOCK_PARTNERS_NAME" => "Партнеры",
		"DETAIL_BLOG_URL" => "catalog_comments",
		"COMMENTS_COUNT" => "5",
		"BLOG_TITLE" => "Комментарии",
		"DETAIL_BLOG_EMAIL_NOTIFY" => "N",
		"DETAIL_LINKED_GOODS_SLIDER" => "Y",
		"SEF_URL_TEMPLATES" => array(
			"news" => "",
			"section" => "#SECTION_CODE#/",
			"detail" => "#SECTION_CODE#/#ELEMENT_CODE#/",
		)
	),
	false
);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>