<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Личный кабинет");
?><?
global $USER;
if(!$USER->isAuthorized()){
	LocalRedirect(SITE_DIR.'wholesale/auth/');
}
else{
	//LocalRedirect(SITE_DIR.'personal/personal-data');?>
	<?$APPLICATION->IncludeComponent(
	"bitrix:sale.personal.section",
	"wholesale",
	Array(
		"ACCOUNT_PAYMENT_ELIMINATED_PAY_SYSTEMS" => array(0=>"0",),
		"ACCOUNT_PAYMENT_PERSON_TYPE" => "9",
		"ACCOUNT_PAYMENT_SELL_CURRENCY" => "RUB",
		"ACCOUNT_PAYMENT_SELL_SHOW_FIXED_VALUES" => "Y",
		"ACCOUNT_PAYMENT_SELL_TOTAL" => array(0=>"100",1=>"200",2=>"500",3=>"1000",4=>"5000",5=>"",),
		"ACCOUNT_PAYMENT_SELL_USER_INPUT" => "Y",
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ALLOW_INNER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"CHECK_RIGHTS_PRIVATE" => "N",
		"COMPATIBLE_LOCATION_MODE_PROFILE" => "N",
		"COMPONENT_TEMPLATE" => "wholesale",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"CUSTOM_PAGES" => "",
		"CUSTOM_SELECT_PROPS" => array(),
		"MAIN_CHAIN_NAME" => "Мой кабинет",
		"NAV_TEMPLATE" => "",
		"ONLY_INNER_FULL" => "N",
		"ORDERS_PER_PAGE" => "20",
		"ORDER_DEFAULT_SORT" => "STATUS",
		"ORDER_DISALLOW_CANCEL" => "N",
		"ORDER_HIDE_USER_INFO" => array(0=>"0",),
		"ORDER_HISTORIC_STATUSES" => array(0=>"P",1=>"F",),
		"ORDER_REFRESH_PRICES" => "N",
		"ORDER_RESTRICT_CHANGE_PAYSYSTEM" => array(0=>"0",),
		"PATH_TO_BASKET" => "/basket/",
		"PATH_TO_BONUS" => SITE_DIR."personal/bonus/",
		"PATH_TO_CATALOG" => "/catalog/",
		"PATH_TO_CONTACT" => "/contacts",
		"PATH_TO_PAYMENT" => "/order/payment/",
		"PER_PAGE" => "20",
		"PROFILES_PER_PAGE" => "20",
		"PROP_1" => array(),
		"PROP_2" => array(0=>"8",1=>"9",2=>"10",3=>"11",4=>"12",5=>"13",6=>"14",7=>"15",8=>"16",9=>"17",10=>"18",11=>"19",),
		"PROP_9" => array(),
		"SAVE_IN_SESSION" => "Y",
		"SEF_FOLDER" => "/wholesale/",
		"SEF_MODE" => "Y",
		"SEF_URL_TEMPLATES" => array("index"=>"index.php","orders"=>"orders/","account"=>"account/","subscribe"=>"subscribe/","profile"=>"profiles/","profile_detail"=>"profiles/#ID#","private"=>"private/","order_detail"=>"order/#ID#/","order_cancel"=>"cancel/#ID#",),
		"SEND_INFO_PRIVATE" => "N",
		"SET_TITLE" => "Y",
		"SHOW_ACCOUNT_COMPONENT" => "Y",
		"SHOW_ACCOUNT_PAGE" => "Y",
		"SHOW_ACCOUNT_PAY_COMPONENT" => "Y",
		"SHOW_BASKET_PAGE" => "Y",
		"SHOW_BONUS_PAGE" => "Y",
		"SHOW_CONTACT_PAGE" => "Y",
		"SHOW_ORDER_PAGE" => "Y",
		"SHOW_PRIVATE_PAGE" => "Y",
		"SHOW_PROFILE_PAGE" => "Y",
		"SHOW_SUBSCRIBE_PAGE" => "Y",
		"USER_PROPERTY_PRIVATE" => "",
		"USE_AJAX_LOCATIONS_PROFILE" => "N"
	)
);?>
<?}?> <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>