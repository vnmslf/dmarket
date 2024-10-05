<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Локальный поиск");
$APPLICATION->SetTitle("Локальный поиск");
?><?$APPLICATION->IncludeComponent(
	"atum:smartsearch", 
	".default", 
	array(
		"COMPONENT_TEMPLATE" => ".default",
		"INCLUDE_JQUERY" => "Y",
		"IBLOCK_TYPE" => "aspro_max_catalog",
		"IBLOCK_ID" => "28",
		"SEARCH_MIN_CHARS" => "3",
		"SEARCH_PAGE" => "/search-local",
		"SEARCH_BY" => "2",
		"SEARCH_SHOW_SECTIONS" => "Y",
		"SEARCH_BY_ARTICLE" => "Y",
		"SEARCH_ONLY_WITH_PICTURE" => "N",
		"SEARCH_ONLY_AVAILABLE" => "N",
		"SEARCH_ONLY_WITH_PRICE" => "N",
		"SEARCH_ARTICLE_PROPERTY" => "CML2_ARTICLE",
		"ITEMS_COUNT" => "10",
		"ITEMS_COUNT_NAV" => "5",
		"ITEMS_IMAGES" => "PHOTO",
		"ITEMS_PRICE_CODE" => "1",
		"ITEMS_CURRENCY" => "RUB",
		"ELEMENT_SORT_FIELD" => "sort",
		"ELEMENT_SORT_ORDER" => "asc",
		"ELEMENT_SORT_FIELD2" => "id",
		"ELEMENT_SORT_ORDER2" => "desc",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO"
	),
	false
);?>
<div class="ya-site-form ya-site-form_inited_no" data-bem="{&quot;action&quot;:&quot;https://yandex.ru/search/site/&quot;,&quot;arrow&quot;:false,&quot;bg&quot;:&quot;transparent&quot;,&quot;fontsize&quot;:12,&quot;fg&quot;:&quot;#000000&quot;,&quot;language&quot;:&quot;ru&quot;,&quot;logo&quot;:&quot;rb&quot;,&quot;publicname&quot;:&quot;Поиск по Дельта-маркету&quot;,&quot;suggest&quot;:true,&quot;target&quot;:&quot;_blank&quot;,&quot;tld&quot;:&quot;ru&quot;,&quot;type&quot;:2,&quot;usebigdictionary&quot;:true,&quot;searchid&quot;:8326620,&quot;input_fg&quot;:&quot;#000000&quot;,&quot;input_bg&quot;:&quot;#ffffff&quot;,&quot;input_fontStyle&quot;:&quot;normal&quot;,&quot;input_fontWeight&quot;:&quot;normal&quot;,&quot;input_placeholder&quot;:null,&quot;input_placeholderColor&quot;:&quot;#000000&quot;,&quot;input_borderColor&quot;:&quot;#7f9db9&quot;}"><form action="https://yandex.ru/search/site/" method="get" target="_blank" accept-charset="utf-8"><input type="hidden" name="searchid" value="8326620"/><input type="hidden" name="l10n" value="ru"/><input type="hidden" name="reqenc" value="utf-8"/><input type="search" name="text" value=""/><input type="submit" value="Найти"/></form></div><style type="text/css">.ya-page_js_yes .ya-site-form_inited_no { display: none; }</style><script type="text/javascript">(function(w,d,c){var s=d.createElement('script'),h=d.getElementsByTagName('script')[0],e=d.documentElement;if((' '+e.className+' ').indexOf(' ya-page_js_yes ')===-1){e.className+=' ya-page_js_yes';}s.type='text/javascript';s.async=true;s.charset='utf-8';s.src=(d.location.protocol==='https:'?'https:':'http:')+'//site.yandex.net/v2.0/js/all.js';h.parentNode.insertBefore(s,h);(w[c]||(w[c]=[])).push(function(){Ya.Site.Form.init()})})(window,document,'yandex_site_callbacks');</script><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>