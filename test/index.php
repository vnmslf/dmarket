<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Title");
?><?
$bUseFeedback = CMax::GetFrontParametrValue('CONTACTS_USE_FEEDBACK', SITE_ID) != 'N';
?>
<div class="feedback item">
	<div class="wrap">
		 <?//if($arShop['DESCRIPTION']):?> <?CMax::showContactDesc();?> <?//endif;?> <?if($bUseFeedback):?> <span> <span class="btn btn-transparent-border-color white animate-load" data-event="jqm" data-param-form_id="ASK" data-name="contacts">Оптовикам</span> </span> <br>
		 <?endif;?>
	</div>
</div>
 <br>
 <br>
 &nbsp;<br>
 <a href="https://delta-market.ru/wholesale/" style="font-family: var(--ui-font-family-primary, var(--ui-font-family-helvetica));">Оптовикам</a><br>
<?php
// Убедитесь, что подключен модуль веб-форм
if (\Bitrix\Main\Loader::includeModule("form")):
    $APPLICATION->IncludeComponent("bitrix:form.result.new", "registration-dealer", Array(
	"WEB_FORM_ID" => "5",	// ID веб-формы
		"IGNORE_CUSTOM_TEMPLATE" => "N",	// Игнорировать свой шаблон
		"USE_EXTENDED_ERRORS" => "Y",	// Использовать расширенный вывод сообщений об ошибках
		"SEF_MODE" => "N",	// Включить поддержку ЧПУ
		"CACHE_TYPE" => "A",	// Тип кеширования
		"CACHE_TIME" => "3600",	// Время кеширования (сек.)
		"LIST_URL" => "",	// Страница со списком результатов
		"EDIT_URL" => "",	// Страница редактирования результата
		"SUCCESS_URL" => "",	// Страница с сообщением об успешной отправке
		"CHAIN_ITEM_TEXT" => "",	// Название дополнительного пункта в навигационной цепочке
		"CHAIN_ITEM_LINK" => "",	// Ссылка на дополнительном пункте в навигационной цепочке
		"COMPOSITE_FRAME_MODE" => "A",	// Голосование шаблона компонента по умолчанию
		"COMPOSITE_FRAME_TYPE" => "AUTO",	// Содержимое компонента
		"VARIABLE_ALIASES" => array(
			"WEB_FORM_ID" => "WEB_FORM_ID",
			"RESULT_ID" => "RESULT_ID",
		)
	),
	false
);
endif;
?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>