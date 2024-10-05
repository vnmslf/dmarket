<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Авторизация");
?>
<?/*$APPLICATION->IncludeComponent("aspro:auth.max", "main", array(
	"SEF_MODE" => "Y",
	"SEF_FOLDER" => "/wholesale/auth/",
	"SEF_URL_TEMPLATES" => array(
		"auth" => "",
		"registration" => "registration/",
		"forgot" => "forgot-password/",
		"change" => "change-password/",
		"confirm" => "confirm-password/",
		"confirm_registration" => "confirm-registration/",
	),
	"PERSONAL" => "/wholesale/personal/"
	),
	false
);*/?>

<?$APPLICATION->IncludeComponent(
	"bitrix:form", 
	"wholesale-auth", 
	array(
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"CHAIN_ITEM_LINK" => "",
		"CHAIN_ITEM_TEXT" => "",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"EDIT_ADDITIONAL" => "N",
		"EDIT_STATUS" => "Y",
		"IGNORE_CUSTOM_TEMPLATE" => "N",
		"NAME_TEMPLATE" => "",
		"NOT_SHOW_FILTER" => array(
			0 => "",
			1 => "",
		),
		"NOT_SHOW_TABLE" => array(
			0 => "",
			1 => "",
		),
		"RESULT_ID" => $_REQUEST["RESULT_ID"],
		"SEF_MODE" => "N",
		"SHOW_ADDITIONAL" => "N",
		"SHOW_ANSWER_VALUE" => "N",
		"SHOW_EDIT_PAGE" => "Y",
		"SHOW_LIST_PAGE" => "Y",
		"SHOW_STATUS" => "Y",
		"SHOW_VIEW_PAGE" => "Y",
		"START_PAGE" => "new",
		"SUCCESS_URL" => "",
		"USE_EXTENDED_ERRORS" => "N",
		"WEB_FORM_ID" => "5",
		"COMPONENT_TEMPLATE" => ".default",
		"VARIABLE_ALIASES" => array(
			"action" => "action",
		)
	),
	false
);?>
 
	
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>