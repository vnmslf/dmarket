<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Каталог оборудования, инструмента и материалов для производства мебели и деревообработки");
$APPLICATION->SetPageProperty("title", "Каталог товаров | Дельта-Маркет");
$APPLICATION->SetTitle("Каталог товаров");

// Определите текущий домен
$currentDomain = $_SERVER['HTTP_HOST'];

// Логика выбора типа цены
$priceCode = array("RETAIL"); // По умолчанию розничная цена
if ($currentDomain == 'dealer.delta-market.ru') {
    $priceCode = array("RETAIL", "PRICE_OPT"); //Розничная и оптовая цена для поддомена
}


$APPLICATION->IncludeComponent(
	"bitrix:catalog", 
	"main", 
	array(
		"IBLOCK_TYPE" => "aspro_max_catalog",
		"IBLOCK_ID" => "28",
		"HIDE_NOT_AVAILABLE" => "L",
		"BASKET_URL" => "/basket/",
		"ACTION_VARIABLE" => "action",
		"PRODUCT_ID_VARIABLE" => "id",
		"SECTION_ID_VARIABLE" => "SECTION_ID",
		"PRODUCT_QUANTITY_VARIABLE" => "quantity",
		"PRODUCT_PROPS_VARIABLE" => "prop",
		"SEF_MODE" => "Y",
		"SEF_FOLDER" => "/",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "Y",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "Y",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "3600000",
		"CACHE_FILTER" => "Y",
		"CACHE_GROUPS" => "Y",
		"SET_TITLE" => "Y",
		"SET_STATUS_404" => "Y",
		"USE_ELEMENT_COUNTER" => "Y",
		"USE_FILTER" => "Y",
		"FILTER_NAME" => "MAX_SMART_FILTER",
		"FILTER_FIELD_CODE" => array(
			0 => "ID",
			1 => "",
		),
		"FILTER_PROPERTY_CODE" => array(
			0 => "MODEL",
			1 => "DIAMETR_SHLANGA_2",
			2 => "DIAMETR_SHLANGA_1",
			3 => "DLINA_SHLANGA_2",
			4 => "PROP500NEW",
			5 => "",
		),
		"FILTER_PRICE_CODE" => array(
			0 => "RETAIL",
			1 => "PRICE_OPT",
		),
		"FILTER_OFFERS_FIELD_CODE" => array(
			0 => "ID",
			1 => "",
		),
		"FILTER_OFFERS_PROPERTY_CODE" => array(
			0 => "ARTICLE",
			1 => "COLOR",
			2 => "CML2_LINK",
			3 => "",
		),
		"USE_REVIEW" => "Y",
		"MESSAGES_PER_PAGE" => "5",
		"USE_CAPTCHA" => "Y",
		"REVIEW_AJAX_POST" => "Y",
		"PATH_TO_SMILE" => "/bitrix/images/forum/smile/",
		"FORUM_ID" => "1",
		"URL_TEMPLATES_READ" => "",
		"SHOW_LINK_TO_FORUM" => "Y",
		"POST_FIRST_MESSAGE" => "N",
		"USE_COMPARE" => "Y",
		"COMPARE_NAME" => "CATALOG_COMPARE_LIST",
		"COMPARE_FIELD_CODE" => array(
			0 => "NAME",
			1 => "",
		),
		"COMPARE_PROPERTY_CODE" => array(
			0 => "CML2_ARTICLE",
			1 => "ID_MANUFAKTURER",
			2 => "BRAND",
			3 => "COUNTRY_OF_ORIGIN",
			4 => "PROIZVODITEL",
			5 => "COLOR_REF2",
			6 => "POWER",
			7 => "VOLTAGE_LEVEL",
			8 => "CURRENT_FREQUENCY",
			9 => "WORK_TEMP",
			10 => "PROP702",
			11 => "CONTAINER_VOLUME",
			12 => "PROP700",
			13 => "PROP701",
			14 => "PROP720",
			15 => "PROP722",
			16 => "PROP721",
			17 => "PROP705_2",
			18 => "PROP_159",
			19 => "PROP_2065",
			20 => "PROP_2052",
			21 => "PROP_2053",
			22 => "PROP_2083",
			23 => "PROP_2054",
			24 => "PROP_2017",
			25 => "PROP_2026",
			26 => "PROP_2027",
			27 => "PROP_2049",
			28 => "PROP_2044",
			29 => "PROP_162",
			30 => "CML2_MANUFACTURER",
			31 => "PROP_2055",
			32 => "PROP_2069",
			33 => "PROP_2062",
			34 => "PROP_2061",
			35 => "",
		),
		"COMPARE_OFFERS_FIELD_CODE" => array(
			0 => "NAME",
			1 => "PREVIEW_PICTURE",
			2 => "",
		),
		"COMPARE_OFFERS_PROPERTY_CODE" => array(
			0 => "ARTICLE",
			1 => "COLOR_REF",
			2 => "SIZES",
			3 => "VOLUME",
			4 => "",
		),
		"COMPARE_ELEMENT_SORT_FIELD" => "SCALED_PRICE_6",
		"COMPARE_ELEMENT_SORT_ORDER" => "asc",
		"DISPLAY_ELEMENT_SELECT_BOX" => "N",
		"PRICE_CODE" => array(
			0 => "RETAIL",
			1 => "PRICE_OPT",
		),
		"USE_PRICE_COUNT" => "Y",
		"SHOW_PRICE_COUNT" => "1",
		"PRICE_VAT_INCLUDE" => "Y",
		"PRICE_VAT_SHOW_VALUE" => "N",
		"PRODUCT_PROPERTIES" => array(
		),
		"USE_PRODUCT_QUANTITY" => "Y",
		"CONVERT_CURRENCY" => "Y",
		"CURRENCY_ID" => "RUB",
		"OFFERS_CART_PROPERTIES" => array(
			0 => "ARTICLE",
		),
		"SHOW_TOP_ELEMENTS" => "Y",
		"SECTION_COUNT_ELEMENTS" => "N",
		"SECTION_TOP_DEPTH" => "3",
		"SECTIONS_LIST_PREVIEW_PROPERTY" => "DESCRIPTION",
		"SHOW_SECTION_LIST_PICTURES" => "Y",
		"PAGE_ELEMENT_COUNT" => "20",
		"LINE_ELEMENT_COUNT" => "5",
		"ELEMENT_SORT_FIELD" => "SCALED_PRICE_6",
		"ELEMENT_SORT_ORDER" => "asc",
		"ELEMENT_SORT_FIELD2" => "SCALED_PRICE_6",
		"ELEMENT_SORT_ORDER2" => "asc",
		"LIST_PROPERTY_CODE" => array(
			0 => "CML2_ARTICLE",
			1 => "PITANIE_V",
			2 => "MAXIMALNAYA_SKOROST_VTASCHENIA",
			3 => "DAVLENIE_VOZDUHA",
			4 => "MAXIMALNAYA_VISOTA_ZAGATOVKI",
			5 => "RADIUS_FRAZI",
			6 => "TAB_TRANSPORT",
			7 => "MOCHSNOST_KVT",
			8 => "PROP_2104",
			9 => "DLINA",
			10 => "VISOTA",
			11 => "ZERKALO",
			12 => "VISOTASIDENIA",
			13 => "STIL_342",
			14 => "SROK_222",
			15 => "PROIZ_111",
			16 => "FASADI_111",
			17 => "PROP_159",
			18 => "PROP_284",
			19 => "PROP_2091",
			20 => "PROP_307",
			21 => "VISOTA_111",
			22 => "GLUB_111",
			23 => "PROP_335",
			24 => "ZOSKOST_111",
			25 => "TIP_OBIVKI_111",
			26 => "STOLESH_222",
			27 => "PROP_2065",
			28 => "PROP_305",
			29 => "PROP_352",
			30 => "PROP_317",
			31 => "PROP_357",
			32 => "PROP_2102",
			33 => "PROP_318",
			34 => "PROP_349",
			35 => "PROP_327",
			36 => "PROP_2052",
			37 => "PROP_336",
			38 => "PROP_2115",
			39 => "PROP_346",
			40 => "PROP_2120",
			41 => "PROP_2053",
			42 => "PROP_363",
			43 => "PROP_320",
			44 => "PROP_2089",
			45 => "PROP_325",
			46 => "PROP_2103",
			47 => "PROP_2085",
			48 => "PROP_300",
			49 => "PROP_322",
			50 => "PROP_362",
			51 => "PROP_365",
			52 => "PROP_359",
			53 => "PROP_364",
			54 => "PROP_356",
			55 => "PROP_343",
			56 => "PROP_2083",
			57 => "PROP_314",
			58 => "PROP_348",
			59 => "PROP_316",
			60 => "PROP_350",
			61 => "PROP_333",
			62 => "PROP_332",
			63 => "PROP_360",
			64 => "PROP_353",
			65 => "PROP_347",
			66 => "PROP_25",
			67 => "PROP_2114",
			68 => "PROP_301",
			69 => "PROP_2101",
			70 => "PROP_2067",
			71 => "PROP_323",
			72 => "PROP_324",
			73 => "PROP_355",
			74 => "PROP_304",
			75 => "PROP_358",
			76 => "PROP_319",
			77 => "PROP_344",
			78 => "PROP_328",
			79 => "PROP_338",
			80 => "PROP_2113",
			81 => "PROP_366",
			82 => "PROP_302",
			83 => "PROP_303",
			84 => "PROP_2054",
			85 => "PROP_341",
			86 => "PROP_223",
			87 => "PROP_283",
			88 => "PROP_354",
			89 => "PROP_313",
			90 => "PROP_2066",
			91 => "PROP_329",
			92 => "PROP_342",
			93 => "PROP_367",
			94 => "PROP_2084",
			95 => "PROP_340",
			96 => "PROP_351",
			97 => "PROP_331",
			98 => "PROP_337",
			99 => "PROP_345",
			100 => "PROP_339",
			101 => "PROP_310",
			102 => "PROP_309",
			103 => "PROP_330",
			104 => "PROP_2017",
			105 => "PROP_321",
			106 => "PROP_308",
			107 => "PROP_206",
			108 => "PROP_334",
			109 => "PROP_2100",
			110 => "PROP_311",
			111 => "PROP_2132",
			112 => "SHUM",
			113 => "PROP_361",
			114 => "PROP_326",
			115 => "PROP_2026",
			116 => "PROP_2027",
			117 => "PROP_2098",
			118 => "PROP_2122",
			119 => "PROP_24",
			120 => "PROP_2049",
			121 => "PROP_22",
			122 => "PROP_2095",
			123 => "PROP_2044",
			124 => "PROP_162",
			125 => "PROP_2055",
			126 => "PROP_2069",
			127 => "PROP_2062",
			128 => "PROP_2061",
			129 => "CML2_LINK",
			130 => "",
		),
		"INCLUDE_SUBSECTIONS" => "A",
		"LIST_META_KEYWORDS" => "-",
		"LIST_META_DESCRIPTION" => "-",
		"LIST_BROWSER_TITLE" => "-",
		"LIST_OFFERS_FIELD_CODE" => array(
			0 => "ID",
			1 => "CML2_LINK",
			2 => "DETAIL_PAGE_URL",
			3 => "",
		),
		"LIST_OFFERS_PROPERTY_CODE" => array(
			0 => "ARTICLE",
			1 => "",
		),
		"LIST_OFFERS_LIMIT" => "10",
		"SORT_BUTTONS" => array(
			0 => "SORT",
			1 => "POPULARITY",
			2 => "NAME",
			3 => "PRICE",
			4 => "QUANTITY",
			5 => "CUSTOM",
		),
		"SORT_PRICES" => "RETAIL",
		"DEFAULT_LIST_TEMPLATE" => "block",
		"SECTION_DISPLAY_PROPERTY" => "UF_SECTION_TEMPLATE",
		"LIST_DISPLAY_POPUP_IMAGE" => "Y",
		"SECTION_PREVIEW_PROPERTY" => "DESCRIPTION",
		"SHOW_SECTION_PICTURES" => "Y",
		"SHOW_SECTION_SIBLINGS" => "Y",
		"DETAIL_PROPERTY_CODE" => array(
			0 => "CML2_ARTICLE",
			1 => "MODEL",
			2 => "BRAND",
			3 => "COUNTRY_OF_ORIGIN",
			4 => "PROIZVODITEL",
			5 => "VIDEO_YOUTUBE",
			6 => "CML2_ATTRIBUTES",
			7 => "MASSA_KG",
			8 => "PITANIE_V",
			9 => "POWER",
			10 => "VOLTAGE_LEVEL",
			11 => "CURRENT_FREQUENCY",
			12 => "VO_MAX",
			13 => "VOBR",
			14 => "VYAZKOST",
			15 => "DIAAMETR_D",
			16 => "DASPIR",
			17 => "D_B00",
			18 => "diametr_pilnogo_vala",
			19 => "d_pil_val",
			20 => "d_ystpil",
			21 => "DCVXODA",
			22 => "DSHF",
			23 => "DL_NAPR",
			24 => "dlina_gorbal",
			25 => "DLIN_P_LEN",
			26 => "Kol_Pil_Val",
			27 => "MAX_t_prop",
			28 => "MAXIMALNAYA_SKOROST_VTASCHENIA",
			29 => "maxtolshina_gorb",
			30 => "Max_shirin",
			31 => "MAX_kol_pil",
			32 => "MAX_Rast",
			33 => "max_diametr_pil",
			34 => "MOSH_VGSH",
			35 => "MOSH_NGSH",
			36 => "MOSH_PVSH",
			37 => "moshnist_elektro_vert_pil",
			38 => "mosh_elektro_gor_pil",
			39 => "Mosh_elektro_yzl",
			40 => "moshnosyelextro",
			41 => "OBEM_KONTEJNEROV",
			42 => "OBMESH",
			43 => "OTKR_VREM",
			44 => "Pokr_Plit_Rab_Stoka",
			45 => "POL_T_D",
			46 => "PROZ_K_V_SMEN",
			47 => "prosvet",
			48 => "RSHIPKOR",
			49 => "RAS_PLIT",
			50 => "skorpilenprav",
			51 => "Skor_Pileniya",
			52 => "SUM_MOSH",
			53 => "T_O_Sred",
			54 => "TOL_P_LEN",
			55 => "chast_vrash_vala",
			56 => "SHIR_P_LEN",
			57 => "shirinapolmater",
			58 => "SHIR_PROP",
			59 => "SHKIV_D",
			60 => "ROD_TOKA_PITAYUSHCHEJ_SETI",
			61 => "WORK_TEMP",
			62 => "PROP_RAS_804",
			63 => "PROP_RAS_805",
			64 => "PROP_RAS_806",
			65 => "PROP464",
			66 => "PROP_RAS_802",
			67 => "PROP_RAS_808",
			68 => "PROP210",
			69 => "PROP_RAS_807",
			70 => "PROP_RAS_810",
			71 => "PROP_RAS_800",
			72 => "PROP_RAS_801",
			73 => "PROP_RAS_803",
			74 => "PROP_RAS_809",
			75 => "PROP_RAS_811",
			76 => "PREHEAT_TIME",
			77 => "DAVLENIE_VOZDUHA",
			78 => "PROP702",
			79 => "DIAMETR_SHLANGA_2",
			80 => "DIAMETR_SHLANGA_1",
			81 => "DLINA_MM",
			82 => "DLINA_SHLANGA_2",
			83 => "DLINA_SHLANGA_1",
			84 => "PROP718",
			85 => "MAXIMALNAYA_VISOTA_ZAGATOVKI",
			86 => "MIN_DLINA_OBRABATIVAEMOGO_MATERIALA",
			87 => "CONTAINER_VOLUME",
			88 => "PROP700",
			89 => "RAZMER_PILNOGO_CENTRA",
			90 => "RAZMER_RABOCHEGO_STOLA",
			91 => "PROP706",
			92 => "PROP708",
			93 => "SKOROST_PODACHI_MATERIALA",
			94 => "PROP703",
			95 => "PROP707",
			96 => "TOLCHSINA_OBRABATIVAEMOGO_MATERIALA",
			97 => "PROP717",
			98 => "PROP716",
			99 => "PROP701",
			100 => "PROP704",
			101 => "PROP705",
			102 => "PROP715",
			103 => "HEIGHT_EDGE_MIN",
			104 => "DAVLENIE_PNEVMATICHESKOJ_SISTEMY_BAR",
			105 => "DIAMETR_CANHI",
			106 => "DIAMETR_SHTEKERA",
			107 => "MAKSIMANAYA_TOLSHCHINA_ZAGOTOVKI_MM",
			108 => "MAKSIMALNOE_USILIE_PRIZHIMA_PRI_DAVLENII_BAR_K",
			109 => "MAKSIMALNYJ_RASKHOD_SZHATOGO_VOZDUHA_L_MIN",
			110 => "OTVERSTIE_V_PLAST",
			111 => "PAZ",
			112 => "TOLSCHINA_SVERLENIA",
			113 => "CHISLO_OBOROTOV_HOLOSTOGO_HODA",
			114 => "VYSOTA_MM",
			115 => "DLINA_VORSA",
			116 => "IZBITOCHNOE_DAVLENIE",
			117 => "OBOROTI",
			118 => "PONIJENNOE_DAVLENIE",
			119 => "RAZMER_FORMI_MM",
			120 => "TEMPERATURNII_REJIM",
			121 => "TOLSHINA_STENOK_MEJDU_SPIRALIU",
			122 => "SHIRINA_VORSA",
			123 => "SHIRINA_OSNOVANIA",
			124 => "DLINA_SOEDINITELNOI_NITI",
			125 => "TEMPERATURA_PLAVLENIA_NITI",
			126 => "DVIGENIE_ROLIKOV",
			127 => "KOL_VO_ROLIKOV",
			128 => "KOLICHESTVO_SHPINDELEY",
			129 => "KOLICHESTVO_SVERLILNIH_TRAVERS",
			130 => "MAX_GLUBINA_SVERLENIYA",
			131 => "RAZMER_ROLIKOV",
			132 => "ASSTOYNIE_MEJDU_2_VNESHNIMI_SPINDELYAMI",
			133 => "RASSTOYNIE_MEJDU_2_KRAINIMI_SPINDELYAMI",
			134 => "CHASTOTA_VRASHCENIYA_SPINDELEY",
			135 => "KOLICHESTVO_SKOROSTEI",
			136 => "RASSTOYANIE_MEJDU_ROLIKAMI",
			137 => "RASSTOYANIE_MEJDU_CENTRAMI_KRAINIH_ROLIKOV",
			138 => "PROP2001NEW",
			139 => "PROP2000NEW",
			140 => "PROP500NEW",
			141 => "PROPRPM",
			142 => "PROP741",
			143 => "PROP1703",
			144 => "HEIGHT_EDGE_MAX",
			145 => "PROP720",
			146 => "PROP901",
			147 => "PROP900",
			148 => "PROP803",
			149 => "PROP805",
			150 => "PROP809",
			151 => "PROP810",
			152 => "PROP1102_2",
			153 => "PROP724",
			154 => "PROP1100",
			155 => "PROP729",
			156 => "PROP730",
			157 => "PROP1103",
			158 => "PROP1101",
			159 => "PROP806",
			160 => "PROP811",
			161 => "PROP1102",
			162 => "PROP735",
			163 => "PROP732",
			164 => "PROP722",
			165 => "PROP733",
			166 => "PROP734",
			167 => "PROP721",
			168 => "PROP812",
			169 => "PROP800",
			170 => "PROP807",
			171 => "PROP1702",
			172 => "PROP731",
			173 => "PROP742",
			174 => "PROP723",
			175 => "PROP726",
			176 => "PROP1105",
			177 => "PROP740",
			178 => "PROP801",
			179 => "PROP808",
			180 => "PROP1104",
			181 => "PROP1102_3",
			182 => "PROP705_2",
			183 => "RAZMERY_PILNOGO_POLOTNA_MM",
			184 => "SKOROST_REZANIYA_M_MIN",
			185 => "SECHENIE_OBRABATYVAEMOJ_DETALI_PRI_90_MM",
			186 => "SECHENIE_OBRABATYVAEMOJ_DETALI_PRI_45_MM",
			187 => "SECHENIE_OBRABATYVAEMOJ_DETALI_PRI_60_MM",
			188 => "SECHENIE_OBRABATYVAEMOJ_DETALI_PRI_MINUS_45_MM",
			189 => "UPRAVLENIE_SILOJ_NATYAZHENIYA_LENTY",
			190 => "SKOROST_OBVYAZKI",
			191 => "SILA_NATYAZHENIYA_LENTY_MAX",
			192 => "VNUTRENNIJ_GABARIT_RAMKI",
			193 => "MIN_RAZMER_ZAGOTOVKI_DLYA_UPAKOVKI",
			194 => "RAZMER_LENTY",
			195 => "PROP5106",
			196 => "PROP51001",
			197 => "PROP51002",
			198 => "PROP5110",
			199 => "PROP51003",
			200 => "PROP51004",
			201 => "PROPTOLSCH",
			202 => "TIP_SVERLA",
			203 => "PROPINS6003new",
			204 => "HVOSTOVIK",
			205 => "VRACHENIE",
			206 => "VNESHNII_DIAMETR",
			207 => "DIAMETR_HVOSTOVIKA",
			208 => "PROPINS61111",
			209 => "PROPINS6001",
			210 => "PROP2001",
			211 => "VID_FREZY",
			212 => "VNUTRENNII_DIAMETR",
			213 => "PROP6002",
			214 => "PROP6001",
			215 => "PROP6005",
			216 => "PROP6006",
			217 => "PROPINS6005",
			218 => "PROP6007",
			219 => "PROP6008",
			220 => "DLINA_REJUCHSEI_CHASTI_NOJA",
			221 => "PROPINS6002",
			222 => "PROPINS6003",
			223 => "PROPINS6004",
			224 => "PROP6008new",
			225 => "PROPTOLZUB",
			226 => "PROPTOLPOL",
			227 => "PROPGRIT",
			228 => "VISOTA_ALMAZA_MM",
			229 => "TIP_KLEYA",
			230 => "FOUNDATION",
			231 => "APPEARANCE",
			232 => "COLOR_KLEY",
			233 => "PROP7000",
			234 => "REKOMENDACII_TIPA_STANKA",
			235 => "WORK_TEMP_KLEY",
			236 => "PROP_369",
			237 => "SOFTENING_POINT",
			238 => "PROP_368",
			239 => "MEMBRANE_TEMPERATURE",
			240 => "MELTING_INDEX",
			241 => "NOMINAL_VISCOSITY_IN_A_CIRCLE_IUD",
			242 => "VYAZKOST_CPS",
			243 => "MFT",
			244 => "MOISTURE_OF_BONDED_ELEMENTS",
			245 => "TENSILE_STRENGTH_AT_SEPARATION",
			246 => "BARREL_TEMPERATURE",
			247 => "PROP_370",
			248 => "DENSITY",
			249 => "STRETCHING",
			250 => "INDOOR_TEMPERATURE",
			251 => "ROLL_TEMPERATURE",
			252 => "ACTIVATION_TEMPERATURE",
			253 => "MINIMUM_FILM_FORMATION_TEMPERATURE",
			254 => "SETTING_TIME",
			255 => "OPEN_TIME",
			256 => "HEAT_RESISTANCE",
			257 => "MOVEMENT_SPEED",
			258 => "NOZZLE_DIAMETER",
			259 => "DRYING_TIME",
			260 => "PRESSING_TIME",
			261 => "PH_ISO976",
			262 => "DILUTION",
			263 => "APPLICATION_METHOD",
			264 => "COMPRESSION_PRESSURE",
			265 => "COMPRESSION_SPRAYING",
			266 => "CONSUMPTION",
			267 => "MASS_FRACTION_OF_RESIDUAL_MONOMER",
			268 => "MASS_FRACTION_OF_DRY_MATTER",
			269 => "HYDROGEN_ION_CONCENTRATION_INDEX",
			270 => "FREEZE_RESISTANCE_OF_THE_ADHESIVE",
			271 => "SEDIMENTATION_ON_DILUTION",
			272 => "RASHOD_KLEYA_1",
			273 => "RASHOD_KLEYA_2",
			274 => "TEMPERATURA_REAKCIONNOI_SPOSOBNOSTI",
			275 => "MAX_RAST_PLIT",
			276 => "TR_OB_M",
			277 => "D_1_CH_SH",
			278 => "D_5_SH",
			279 => "DIAMETR_GIDCIL",
			280 => "MAX_CUTTING_LENGTH",
			281 => "MAX_HEIGHT_MATERIAL_TO_CUT",
			282 => "MAIN_SAW",
			283 => "ENGINE_POWER",
			284 => "ROTATIONAL_SPEED",
			285 => "SAW_DIAMETER",
			286 => "LANDING_DIAMETER",
			287 => "SCORING_SAW",
			288 => "PROP102",
			289 => "PROP103",
			290 => "PROP104",
			291 => "PROP105",
			292 => "PROP106",
			293 => "PROP107",
			294 => "Kol_Pnevmo_Pod",
			295 => "MAX_RAS_PLIT",
			296 => "MOSH_DVIG_MAS_NAS",
			297 => "YS_PRES",
			298 => "MAX_DAV",
			299 => "DAVLENIE_V_PNEVMOSISTEME_ATM",
			300 => "DIAMETR_SHPINDELEJ_MM",
			301 => "MOSHCHNOST_DVIGATELYA_PODYOMA_TRAVERSY_KVT",
			302 => "MOSHCHNOST_DVIGATELYA_PODACHI_KVT",
			303 => "MOSHCHNOST_NIZHNEGO_GORIZ_SHPINDELYA_KVT",
			304 => "MOSHCHNOST_PRAVOGO_VERTIK_SHPINDELYA_KVT",
			305 => "MOSHCHNOST_LEVOGO_VERTIK_SHPINDELYA_KVT",
			306 => "MOSHCHNOST_1GO_VERHNEGO_GORIZ_SHPINDELYA_KVT",
			307 => "MOSHCHNOST_2GO_NIZHNEGO_GORIZ_SHPINDELYA_KVT",
			308 => "RAZOST",
			309 => "HOD_KARETKI_MM",
			310 => "NAKLON_PILY_GRAD",
			311 => "RAZPODKAR",
			312 => "SPOSOB_PODACHI_ZAGOTOVOK",
			313 => "VERTIKALNYJ_HOD_SHPINDELYA_MM",
			314 => "UGOL_NAKLONA_RABOCHEGO_STOLA",
			315 => "DIAMETR_VALA_MM",
			316 => "CANGA",
			317 => "NAIB_SHIRINA_FUGOVANIYA_REJSMUSOVANIYA_MM",
			318 => "TOLSHCHINA_PRI_REJSMUSOVANII_MM",
			319 => "SKOROST_PODACHI_PRI_REJSMUSOVANII_M_MIN",
			320 => "CHASTOTA_VRASHCHENIYA_NOZHEVOGO_VALA",
			321 => "RAZMERY_UPORA_MM",
			322 => "UGOL_NAKLONA_UPORA_GRAD",
			323 => "MAKSIMALNAYA_TOLSHCHINA_SNIMAEMOGO_SLOYA",
			324 => "DIAMETR_NOZHEVOGO_VALA",
			325 => "MOSHCHNOST_EL_DVIGATELYA_VENTILYATORA_KVT",
			326 => "MOSHCHNOST_EL_DVIGATELYA_VIBROOCHISTKI_KVT",
			327 => "RAZRYAZHENIE_VENTILYATORA_PA",
			328 => "PLOSHCHAD_FILTRACII",
			329 => "KOLICHESTVO_FILTROV_SHT",
			330 => "RAZMER_PATRUBKA_ASPIRACII_MM",
			331 => "KOLICHESTVO_KONTEJNEROV_SHT",
			332 => "NARUZHNYJ_DIAMETR_DISKOVYH_PIL_MM",
			333 => "KOLICHESTVO_OBOROTOV_SHLIFOVALNOGO_KRUGA_OB_MIN",
			334 => "DIAMETRY_FREZ_MM",
			335 => "VYSOTA_PODEMA_SHPINDELYA_MM",
			336 => "HOD_RABOCHEGO_STOLA_MM",
			337 => "CHASTOTA_VRASHCHENIYA_SHLIFOVALNOGO_KRUGA_OB_MIN",
			338 => "DIAMETRY_VTULOK_POD_NASADNOJ_INSTRUMENT_MM",
			339 => "Temp_Nag_Plit_MAX",
			340 => "KOL_GIDCIL",
			341 => "Dlina_Rab",
			342 => "MAX_TEMP_TEPLONOS",
			343 => "M_D_GIDCT",
			344 => "M_nad_El",
			345 => "MAX_D_SHIND",
			346 => "D_MAS_CIL",
			347 => "M_1N_SH",
			348 => "PROP20",
			349 => "PROP201",
			350 => "PROP202",
			351 => "PROP203",
			352 => "PROP204",
			353 => "PROP205",
			354 => "PROP206",
			355 => "PROP207",
			356 => "PROP208",
			357 => "PROP209",
			358 => "PROP211",
			359 => "PROP212",
			360 => "PROP213",
			361 => "PROP214",
			362 => "PROP215",
			363 => "PROP216",
			364 => "PROP217",
			365 => "PROP218",
			366 => "PriGYsiL",
			367 => "KOL_PROL",
			368 => "MAX_DLIN_PAZ",
			369 => "SHIR_PAZ",
			370 => "M_2N_SH",
			371 => "M_D_SH_BAR",
			372 => "MAX_GLUB_PAZ",
			373 => "M_DVIG_5SH",
			374 => "PROP301",
			375 => "PROP302",
			376 => "PROP303",
			377 => "PROP305",
			378 => "PROP306",
			379 => "PROP307",
			380 => "PROP308",
			381 => "PROP309",
			382 => "PROP310",
			383 => "PROP323",
			384 => "PROP311",
			385 => "PROP313",
			386 => "PROP314",
			387 => "PROP315",
			388 => "PROP316",
			389 => "PROP319",
			390 => "PROP321",
			391 => "Shirina_Rab",
			392 => "PROP400",
			393 => "PROP401",
			394 => "PROP402",
			395 => "PROP403",
			396 => "PROP412",
			397 => "PROP413",
			398 => "PROP410",
			399 => "PROP411",
			400 => "PROP404",
			401 => "PROP405",
			402 => "PROP408",
			403 => "PROP422",
			404 => "PROP304",
			405 => "PROP423",
			406 => "PROP424",
			407 => "PROP414",
			408 => "PROP415",
			409 => "PROP416",
			410 => "PROP118",
			411 => "PROP300",
			412 => "PROP417",
			413 => "PROP418",
			414 => "PROP419",
			415 => "PROP420",
			416 => "PROP425",
			417 => "PROP426",
			418 => "PROP427",
			419 => "PROP428",
			420 => "PROP429",
			421 => "PROP430",
			422 => "PROP431",
			423 => "PROP432",
			424 => "PROP433",
			425 => "PROP434",
			426 => "PROP435",
			427 => "PROP436",
			428 => "PROP437",
			429 => "PROP438",
			430 => "PROP439",
			431 => "PROP450",
			432 => "PROP451",
			433 => "PROP452",
			434 => "PROP453",
			435 => "PROP454",
			436 => "PROP455",
			437 => "PROP456",
			438 => "PROP457",
			439 => "PROP458",
			440 => "PROP459",
			441 => "PROP460",
			442 => "PROP470",
			443 => "PROP461",
			444 => "PROP462",
			445 => "PROP463",
			446 => "PROP465",
			447 => "PROP466",
			448 => "PROP467",
			449 => "PROP468",
			450 => "PROP469",
			451 => "PROP471",
			452 => "PROP472",
			453 => "PROP473",
			454 => "PROP474",
			455 => "PROP476",
			456 => "PROP477",
			457 => "PROP478",
			458 => "Raz_Plit",
			459 => "PROP479",
			460 => "PROP480",
			461 => "PROP481",
			462 => "PROP482",
			463 => "PROP483",
			464 => "PROP484",
			465 => "PROP485",
			466 => "PROP486",
			467 => "PROP487",
			468 => "PROP488",
			469 => "PROP489",
			470 => "PROP490",
			471 => "PROP491",
			472 => "PROP492",
			473 => "PROP493",
			474 => "PROP494",
			475 => "PROP6009",
			476 => "PROPBASE600",
			477 => "VID_YPAK",
			478 => "SIZE",
			479 => "PROPBASE601",
			480 => "WEIGHT",
			481 => "SIZE_TRANS",
			482 => "BRUTTO",
			483 => "SHTRIHCOD",
			484 => "KOD_TN_VED",
			485 => "7124",
			486 => "VSTROENNYY_FILTR_OTDELENIE_CHASTITS_MKM",
			487 => "GABARITY_D_SH_V_MM",
			488 => "GABARITY_MM",
			489 => "DAVLENIE_ATM",
			490 => "DAVLENIE_BAR",
			491 => "DIAPAZON_IZMERENIYA",
			492 => "DIAPAZON_PEREPADA_DAVLENIYA",
			493 => "DIAPAZON_RABOCHEGO_DAVLENIYA",
			494 => "DIAPAZON_RABOCHIKH_TEMPERATUR_C",
			495 => "ZASHCHITNOE_POKRYTIE",
			496 => "MAKS_RABOCHEE_DAVLENIE_BAR_PSI",
			497 => "MAKS_DAVLENIE_BAR_PSI",
			498 => "MAKSIMALNYY_PEREPAD_DAVLENIYA",
			499 => "OBEM_RESIVERA_L",
			500 => "PROIZVODITELNOST_VKHOD_L_MIN",
			501 => "PROIZVODITELNOST_VYKHOD_L_MIN",
			502 => "PROIZVODITELNOST_L_MIN",
			503 => "PROIZVODITELNOST_M_MIN",
			504 => "RABOCHAYA_TEMPERATURA",
			505 => "RABOCHAYA_TEMPERATURA_ATMOSFERNYY_VOZDUKH",
			506 => "RABOCHAYA_TEMPERATURA_SZHATYY_VOZDUKH",
			507 => "RABOCHEE_DAVLENIE",
			508 => "RABOCHEE_DAVLENIE_C",
			509 => "RABOCHEE_DAVLENIE_F",
			510 => "RABOCHEE_DAVLENIE_BAR",
			511 => "RABOCHEE_DAVLENIE_BAR_PSI",
			512 => "TEMPERATURA_VOZDUKHA_NA_VSASYVANIE_S",
			513 => "TIP_DVIGATELYA",
			514 => "TIP_KOMPRESSORA",
			515 => "TIP_PRIVODA",
			516 => "PROP2000",
			517 => "PROP6010",
			518 => "SHIRINA_MM",
			519 => "",
		),
		"DETAIL_META_KEYWORDS" => "-",
		"DETAIL_META_DESCRIPTION" => "-",
		"DETAIL_BROWSER_TITLE" => "-",
		"DETAIL_OFFERS_FIELD_CODE" => array(
			0 => "",
			1 => "DETAIL_PAGE_URL",
			2 => "",
		),
		"DETAIL_OFFERS_PROPERTY_CODE" => array(
			0 => "ARTICLE",
			1 => "",
		),
		"PROPERTIES_DISPLAY_LOCATION" => "TAB",
		"SHOW_BRAND_PICTURE" => "Y",
		"SHOW_ASK_BLOCK" => "Y",
		"ASK_FORM_ID" => "2",
		"SHOW_ADDITIONAL_TAB" => "Y",
		"PROPERTIES_DISPLAY_TYPE" => "TABLE",
		"SHOW_KIT_PARTS" => "Y",
		"SHOW_KIT_PARTS_PRICES" => "Y",
		"LINK_IBLOCK_TYPE" => "aspro_max_content",
		"LINK_IBLOCK_ID" => "32",
		"LINK_PROPERTY_SID" => "LINK_BRANDS",
		"LINK_ELEMENTS_URL" => "link.php?PARENT_ELEMENT_ID=#ELEMENT_ID#",
		"USE_ALSO_BUY" => "Y",
		"ALSO_BUY_ELEMENT_COUNT" => "5",
		"ALSO_BUY_MIN_BUYES" => "0",
		"USE_STORE" => "Y",
		"USE_STORE_PHONE" => "Y",
		"USE_STORE_SCHEDULE" => "Y",
		"USE_MIN_AMOUNT" => "Y",
		"MIN_AMOUNT" => "10",
		"STORE_PATH" => "/contacts/stores/#STORE_ID#/",
		"MAIN_TITLE" => "Наличие на складах",
		"MAX_AMOUNT" => "20",
		"USE_ONLY_MAX_AMOUNT" => "Y",
		"OFFERS_SORT_FIELD" => "shows",
		"OFFERS_SORT_ORDER" => "asc",
		"OFFERS_SORT_FIELD2" => "shows",
		"OFFERS_SORT_ORDER2" => "asc",
		"PAGER_TEMPLATE" => "main",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "Товары",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "Y",
		"IBLOCK_STOCK_ID" => "24",
		"IBLOCK_LINK_NEWS_ID" => "23",
		"IBLOCK_SERVICES_ID" => "25",
		"IBLOCK_TIZERS_ID" => "12",
		"IBLOCK_LINK_REVIEWS_ID" => "21",
		"STAFF_IBLOCK_ID" => "",
		"VACANCY_IBLOCK_ID" => "",
		"SHOW_QUANTITY" => "Y",
		"SHOW_MEASURE" => "Y",
		"SHOW_QUANTITY_COUNT" => "Y",
		"USE_RATING" => "Y",
		"DISPLAY_WISH_BUTTONS" => "Y",
		"DEFAULT_COUNT" => "1",
		"SHOW_HINTS" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"ADD_SECTIONS_CHAIN" => "Y",
		"ADD_ELEMENT_CHAIN" => "N",
		"ADD_PROPERTIES_TO_BASKET" => "Y",
		"PARTIAL_PRODUCT_PROPERTIES" => "Y",
		"DETAIL_CHECK_SECTION_ID_VARIABLE" => "N",
		"STORES" => array(
			0 => "1",
			1 => "2",
			2 => "3",
			3 => "6",
			4 => "9",
			5 => "10",
			6 => "",
		),
		"USER_FIELDS" => array(
			0 => "",
			1 => "UF_CATALOG_ICON",
			2 => "",
		),
		"FIELDS" => array(
			0 => "TITLE",
			1 => "ADDRESS",
			2 => "PHONE",
			3 => "SCHEDULE",
			4 => "EMAIL",
			5 => "",
		),
		"SHOW_EMPTY_STORE" => "Y",
		"SHOW_GENERAL_STORE_INFORMATION" => "Y",
		"TOP_ELEMENT_COUNT" => "8",
		"TOP_LINE_ELEMENT_COUNT" => "4",
		"TOP_ELEMENT_SORT_FIELD" => "shows",
		"TOP_ELEMENT_SORT_ORDER" => "asc",
		"TOP_ELEMENT_SORT_FIELD2" => "shows",
		"TOP_ELEMENT_SORT_ORDER2" => "asc",
		"TOP_PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"COMPONENT_TEMPLATE" => "main",
		"DETAIL_SET_CANONICAL_URL" => "Y",
		"SHOW_DEACTIVATED" => "N",
		"TOP_OFFERS_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"TOP_OFFERS_PROPERTY_CODE" => array(
			0 => "ARTICLE",
			1 => "",
		),
		"TOP_OFFERS_LIMIT" => "10",
		"SECTION_TOP_BLOCK_TITLE" => "Лучшие предложения",
		"OFFER_TREE_PROPS" => array(
		),
		"USE_BIG_DATA" => "Y",
		"BIG_DATA_RCM_TYPE" => "bestsell",
		"SHOW_DISCOUNT_PERCENT" => "Y",
		"SHOW_OLD_PRICE" => "Y",
		"VIEWED_ELEMENT_COUNT" => "20",
		"VIEWED_BLOCK_TITLE" => "Ранее вы смотрели",
		"ELEMENT_SORT_FIELD_BOX" => "name",
		"ELEMENT_SORT_ORDER_BOX" => "asc",
		"ELEMENT_SORT_FIELD_BOX2" => "id",
		"ELEMENT_SORT_ORDER_BOX2" => "desc",
		"ADD_PICT_PROP" => "PHOTO",
		"OFFER_ADD_PICT_PROP" => "MORE_PHOTO",
		"MAX_GALLERY_ITEMS" => "5",
		"SHOW_GALLERY" => "Y",
		"SHOW_PROPS" => "Y",
		"DETAIL_ADD_DETAIL_TO_SLIDER" => "Y",
		"SKU_DETAIL_ID" => "oid",
		"USE_MAIN_ELEMENT_SECTION" => "Y",
		"SET_LAST_MODIFIED" => "Y",
		"PAGER_BASE_LINK_ENABLE" => "Y",
		"SHOW_404" => "Y",
		"MESSAGE_404" => "",
		"AJAX_FILTER_CATALOG" => "Y",
		"AJAX_CONTROLS" => "Y",
		"SECTION_BACKGROUND_IMAGE" => "UF_SECTION_BG_IMG",
		"DETAIL_BACKGROUND_IMAGE" => "-",
		"DISPLAY_ELEMENT_SLIDER" => "10",
		"SHOW_ONE_CLICK_BUY" => "Y",
		"USE_GIFTS_DETAIL" => "N",
		"USE_GIFTS_SECTION" => "N",
		"USE_GIFTS_MAIN_PR_SECTION_LIST" => "N",
		"GIFTS_DETAIL_PAGE_ELEMENT_COUNT" => "8",
		"GIFTS_DETAIL_HIDE_BLOCK_TITLE" => "N",
		"GIFTS_DETAIL_BLOCK_TITLE" => "Выберите один из подарков",
		"GIFTS_DETAIL_TEXT_LABEL_GIFT" => "Подарок",
		"GIFTS_SECTION_LIST_PAGE_ELEMENT_COUNT" => "3",
		"GIFTS_SECTION_LIST_HIDE_BLOCK_TITLE" => "N",
		"GIFTS_SECTION_LIST_BLOCK_TITLE" => "Подарки к товарам этого раздела",
		"GIFTS_SECTION_LIST_TEXT_LABEL_GIFT" => "Подарок",
		"GIFTS_SHOW_DISCOUNT_PERCENT" => "Y",
		"GIFTS_SHOW_OLD_PRICE" => "Y",
		"GIFTS_SHOW_NAME" => "Y",
		"GIFTS_SHOW_IMAGE" => "Y",
		"GIFTS_MESS_BTN_BUY" => "Выбрать",
		"GIFTS_MAIN_PRODUCT_DETAIL_PAGE_ELEMENT_COUNT" => "4",
		"GIFTS_MAIN_PRODUCT_DETAIL_HIDE_BLOCK_TITLE" => "N",
		"GIFTS_MAIN_PRODUCT_DETAIL_BLOCK_TITLE" => "Выберите один из товаров, чтобы получить подарок",
		"OFFER_HIDE_NAME_PROPS" => "N",
		"DISABLE_INIT_JS_IN_COMPONENT" => "N",
		"DETAIL_SET_VIEWED_IN_COMPONENT" => "Y",
		"SECTION_PREVIEW_DESCRIPTION" => "Y",
		"SECTIONS_LIST_PREVIEW_DESCRIPTION" => "Y",
		"SALE_STIKER" => "SALE_TEXT",
		"SHOW_DISCOUNT_TIME" => "Y",
		"SHOW_RATING" => "Y",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"DETAIL_OFFERS_LIMIT" => "0",
		"DETAIL_EXPANDABLES_TITLE" => "С этим товаром покупают",
		"DETAIL_ASSOCIATED_TITLE" => "Вам также может понравиться",
		"DETAIL_LINKED_GOODS_SLIDER" => "Y",
		"DETAIL_LINKED_GOODS_TABS" => "Y",
		"DETAIL_PICTURE_MODE" => "MAGNIFIER",
		"SHOW_UNABLE_SKU_PROPS" => "Y",
		"HIDE_NOT_AVAILABLE_OFFERS" => "Y",
		"DETAIL_STRICT_SECTION_CHECK" => "N",
		"COMPATIBLE_MODE" => "Y",
		"TEMPLATE_THEME" => "site",
		"LABEL_PROP" => "",
		"PRODUCT_DISPLAY_MODE" => "N",
		"COMMON_SHOW_CLOSE_POPUP" => "N",
		"PRODUCT_SUBSCRIPTION" => "Y",
		"SHOW_MAX_QUANTITY" => "N",
		"MESS_BTN_BUY" => "Купить",
		"MESS_BTN_ADD_TO_BASKET" => "В корзину",
		"MESS_BTN_COMPARE" => "Сравнение",
		"MESS_BTN_DETAIL" => "Подробнее",
		"MESS_NOT_AVAILABLE" => "Нет в наличии",
		"MESS_BTN_SUBSCRIBE" => "Подписаться",
		"SIDEBAR_SECTION_SHOW" => "Y",
		"SIDEBAR_DETAIL_SHOW" => "N",
		"SIDEBAR_PATH" => "",
		"USE_SALE_BESTSELLERS" => "Y",
		"FILTER_VIEW_MODE" => "VERTICAL",
		"FILTER_HIDE_ON_MOBILE" => "N",
		"INSTANT_RELOAD" => "N",
		"COMPARE_POSITION_FIXED" => "Y",
		"COMPARE_POSITION" => "top left",
		"USE_RATIO_IN_RANGES" => "Y",
		"USE_COMMON_SETTINGS_BASKET_POPUP" => "N",
		"COMMON_ADD_TO_BASKET_ACTION" => "ADD",
		"TOP_ADD_TO_BASKET_ACTION" => "BUY",
		"SECTION_ADD_TO_BASKET_ACTION" => "BUY",
		"DETAIL_ADD_TO_BASKET_ACTION" => "",
		"DETAIL_ADD_TO_BASKET_ACTION_PRIMARY" => "",
		"TOP_PROPERTY_CODE_MOBILE" => "",
		"TOP_VIEW_MODE" => "BANNER",
		"TOP_PRODUCT_BLOCKS_ORDER" => "price,props,sku,quantityLimit,quantity,buttons,compare",
		"TOP_PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false}]",
		"TOP_ENLARGE_PRODUCT" => "STRICT",
		"TOP_SHOW_SLIDER" => "Y",
		"TOP_SLIDER_INTERVAL" => "3000",
		"TOP_SLIDER_PROGRESS" => "N",
		"SECTIONS_VIEW_MODE" => "LIST",
		"SECTIONS_SHOW_PARENT_NAME" => "Y",
		"LIST_PROPERTY_CODE_MOBILE" => "",
		"LIST_PRODUCT_BLOCKS_ORDER" => "price,props,sku,quantityLimit,quantity,buttons,compare",
		"LIST_PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false},{'VARIANT':'3','BIG_DATA':false}]",
		"LIST_ENLARGE_PRODUCT" => "STRICT",
		"LIST_SHOW_SLIDER" => "Y",
		"LIST_SLIDER_INTERVAL" => "3000",
		"LIST_SLIDER_PROGRESS" => "N",
		"DETAIL_MAIN_BLOCK_PROPERTY_CODE" => "",
		"DETAIL_MAIN_BLOCK_OFFERS_PROPERTY_CODE" => "",
		"DETAIL_USE_VOTE_RATING" => "N",
		"DETAIL_USE_COMMENTS" => "N",
		"DETAIL_BRAND_USE" => "N",
		"DETAIL_DISPLAY_NAME" => "Y",
		"DETAIL_IMAGE_RESOLUTION" => "16by9",
		"DETAIL_PRODUCT_INFO_BLOCK_ORDER" => "sku,props",
		"DETAIL_PRODUCT_PAY_BLOCK_ORDER" => "rating,price,priceRanges,quantityLimit,quantity,buttons",
		"DETAIL_BLOCKS_ORDER" => "complect,nabor,offers,modules,tabs,gifts,services,news,blog,staff,vacancy,goods",
		"DETAIL_SHOW_SLIDER" => "N",
		"DETAIL_DETAIL_PICTURE_MODE" => "",
		"DETAIL_DISPLAY_PREVIEW_TEXT_MODE" => "H",
		"MESS_PRICE_RANGES_TITLE" => "Цены",
		"MESS_DESCRIPTION_TAB" => "Описание",
		"MESS_PROPERTIES_TAB" => "Характеристики",
		"MESS_COMMENTS_TAB" => "Комментарии",
		"LAZY_LOAD" => "N",
		"LOAD_ON_SCROLL" => "N",
		"USE_ENHANCED_ECOMMERCE" => "N",
		"DETAIL_DOCS_PROP" => "INSTRUCTIONS",
		"STIKERS_PROP" => "HIT",
		"USE_SHARE" => "Y",
		"TAB_OFFERS_NAME" => "",
		"TAB_DESCR_NAME" => "",
		"TAB_KOMPLECT_NAME" => "",
		"TAB_NABOR_NAME" => "",
		"TAB_CHAR_NAME" => "",
		"TAB_VIDEO_NAME" => "",
		"TAB_REVIEW_NAME" => "",
		"TAB_FAQ_NAME" => "",
		"TAB_STOCK_NAME" => "",
		"TAB_DOPS_NAME" => "Инфографика",
		"BLOCK_SERVICES_NAME" => "",
		"BLOCK_DOCS_NAME" => "",
		"DIR_PARAMS" => CMax::GetDirMenuParametrs(__DIR__),
		"ELEMENT_DETAIL_TYPE_VIEW" => "FROM_MODULE",
		"SHOW_CHEAPER_FORM" => "N",
		"LANDING_TITLE" => "Популярные категории",
		"LANDING_SECTION_COUNT" => "10",
		"LANDING_SEARCH_TITLE" => "Похожие запросы",
		"LANDING_SEARCH_COUNT" => "7",
		"LIST_SECTIONS_TYPE_VIEW" => "sections_1",
		"LIST_ELEMENTS_TYPE_VIEW" => "list_elements_1",
		"CHEAPER_FORM_NAME" => "",
		"SECTIONS_TYPE_VIEW" => "FROM_MODULE",
		"SECTION_ELEMENTS_TYPE_VIEW" => "list_elements_1",
		"ELEMENT_TYPE_VIEW" => "FROM_MODULE",
		"LANDING_TYPE_VIEW" => "FROM_MODULE",
		"FILE_404" => "",
		"SHOW_MEASURE_WITH_RATIO" => "Y",
		"SHOW_COUNTER_LIST" => "Y",
		"SHOW_DISCOUNT_TIME_EACH_SKU" => "N",
		"USER_CONSENT" => "Y",
		"USER_CONSENT_ID" => "1",
		"USER_CONSENT_IS_CHECKED" => "N",
		"USER_CONSENT_IS_LOADED" => "Y",
		"SHOW_ARTICLE_SKU" => "Y",
		"USE_FILTER_PRICE" => "Y",
		"DISPLAY_ELEMENT_COUNT" => "Y",
		"RESTART" => "Y",
		"USE_LANGUAGE_GUESS" => "Y",
		"NO_WORD_LOGIC" => "Y",
		"SORT_REGION_PRICE" => "RETAIL",
		"SHOW_SECTION_DESC" => "Y",
		"USE_ADDITIONAL_GALLERY" => "Y",
		"ADDITIONAL_GALLERY_TYPE" => "BIG",
		"ADDITIONAL_GALLERY_PROPERTY_CODE" => "MORE_PHOTO1",
		"ADDITIONAL_GALLERY_OFFERS_PROPERTY_CODE" => "MORE_PHOTO",
		"BLOCK_ADDITIONAL_GALLERY_NAME" => "Фотогалерея",
		"STORES_FILTER" => "AMOUNT",
		"STORES_FILTER_ORDER" => "SORT_DESC",
		"VIEW_BLOCK_TYPE" => "N",
		"SHOW_INFOGRAPHICS" => "Y",
		"TAB_INFOGRAPHICS_NAME" => "Инфографика",
		"INFOGRAPHICS_PROPERTY_CODE" => "CML2_PICTURESINFO",
		"SHOW_HOW_BUY" => "N",
		"TITLE_HOW_BUY" => "Как купить",
		"SHOW_DELIVERY" => "Y",
		"TITLE_DELIVERY" => "Доставка",
		"SHOW_PAYMENT" => "N",
		"TITLE_PAYMENT" => "Оплата",
		"SHOW_GARANTY" => "N",
		"TITLE_GARANTY" => "Условия гарантии",
		"TITLE_SLIDER" => "Рекомендуем",
		"SHOW_SEND_GIFT" => "N",
		"SEND_GIFT_FORM_NAME" => "",
		"BLOCK_LANDINGS_NAME" => "",
		"BLOG_IBLOCK_ID" => "",
		"BLOCK_BLOG_NAME" => "",
		"RECOMEND_COUNT" => "5",
		"VISIBLE_PROP_COUNT" => "4",
		"BIGDATA_EXT" => "bigdata_1",
		"SHOW_DISCOUNT_PERCENT_NUMBER" => "Y",
		"ALT_TITLE_GET" => "SEO",
		"BUNDLE_ITEMS_COUNT" => "3",
		"SHOW_LANDINGS_SEARCH" => "Y",
		"SHOW_LANDINGS" => "Y",
		"LANDING_POSITION" => "BEFORE_PRODUCTS",
		"USE_DETAIL_PREDICTION" => "Y",
		"SECTION_BG" => "UF_SECTION_BG_IMG",
		"OFFER_SHOW_PREVIEW_PICTURE_PROPS" => array(
		),
		"LANDING_IBLOCK_ID" => "31",
		"DETAIL_BLOCKS_TAB_ORDER" => "desc,char,custom_tab,infographics, video,stores,reviews,buy,payment,delivery,buy_services",
		"DETAIL_BLOCKS_ALL_ORDER" => "complect,goods,nabor,offers,modules,desc,char,infographics,custom_tab,buy,payment,delivery,video,stores,services,news,blog,reviews,staff,vacancy,gifts,buy_services",
		"DELIVERY_CALC" => "Y",
		"DELIVERY_CALC_NAME" => "",
		"ASK_TAB" => "",
		"TAB_NEWS_NAME" => "",
		"TAB_STAFF_NAME" => "",
		"TAB_VACANCY_NAME" => "",
		"STAFF_VIEW_TYPE" => "staff_block",
		"SECTION_TYPE_VIEW" => "FROM_MODULE",
		"SHOW_BUY_DELIVERY" => "Y",
		"TITLE_BUY_DELIVERY" => "Оплата и доставка",
		"BLOG_URL" => "catalog_comments",
		"SHOW_MORE_SUBSECTIONS" => "Y",
		"SHOW_SIDE_BLOCK_LAST_LEVEL" => "Y",
		"SHOW_SORT_IN_FILTER" => "N",
		"SUBSECTION_PREVIEW_PROPERTY" => "DESCRIPTION",
		"SHOW_SUBSECTION_DESC" => "Y",
		"USE_CUSTOM_RESIZE" => "N",
		"LINKED_ELEMENT_TAB_SORT_FIELD" => "shows",
		"LINKED_ELEMENT_TAB_SORT_ORDER" => "asc",
		"LINKED_ELEMENT_TAB_SORT_FIELD2" => "shows",
		"LINKED_ELEMENT_TAB_SORT_ORDER2" => "asc",
		"DETAIL_BLOG_EMAIL_NOTIFY" => "Y",
		"MAX_IMAGE_SIZE" => "0.5",
		"BIGDATA_SHOW_FROM_SECTION" => "N",
		"LANDING_SEARCH_COUNT_MOBILE" => "3",
		"USE_BIG_DATA_IN_SEARCH" => "Y",
		"BIG_DATA_IN_SEARCH_RCM_TYPE" => "bestsell",
		"TITLE_SLIDER_IN_SEARCH" => "Возможно, вам подойдет",
		"RECOMEND_IN_SEARCH_COUNT" => "10",
		"LANDING_SECTION_COUNT_MOBILE" => "3",
		"SHOW_SMARTSEO_TAGS" => "Y",
		"SMARTSEO_TAGS_COUNT" => "10",
		"SMARTSEO_TAGS_COUNT_MOBILE" => "3",
		"TAB_BUY_SERVICES_NAME" => "",
		"COUNT_SERVICES_IN_ANNOUNCE" => "2",
		"SHOW_ALL_SERVICES_IN_SLIDE" => "N",
		"DETAIL_SET_PRODUCT_TITLE" => "Собрать комплект",
		"DISPLAY_LINKED_PAGER" => "Y",
		"MODULES_ELEMENT_COUNT" => "10",
		"SHOW_SKU_DESCRIPTION" => "N",
		"VISIBLE_PROP_WITH_OFFER" => "N",
		"DISCOUNT_PERCENT_POSITION" => "bottom-right",
		"MESS_NOT_AVAILABLE_SERVICE" => "Недоступно",
		"SIDEBAR_SECTION_POSITION" => "right",
		"SIDEBAR_DETAIL_POSITION" => "right",
		"SEARCH_PAGE_RESULT_COUNT" => "50",
		"SEARCH_RESTART" => "N",
		"SEARCH_NO_WORD_LOGIC" => "Y",
		"SEARCH_USE_LANGUAGE_GUESS" => "Y",
		"SEARCH_CHECK_DATES" => "Y",
		"SEARCH_USE_SEARCH_RESULT_ORDER" => "N",
		"DETAIL_SHOW_POPULAR" => "Y",
		"DETAIL_SHOW_VIEWED" => "Y",
		"MESS_BTN_LAZY_LOAD" => "Показать ещё",
		"TOP_ROTATE_TIMER" => "30",
		"REVIEW_COMMENT_REQUIRED" => "Y",
		"REVIEW_FILTER_BUTTONS" => array(
			0 => "PHOTO",
			1 => "RATING",
			2 => "TEXT",
		),
		"REAL_CUSTOMER_TEXT" => "",
		"USE_COMPARE_GROUP" => "Y",
		"SHOW_SORT_RANK_BUTTON" => "Y",
		"HIDE_SUBSECTIONS_LIST" => "N",
		"USE_LANDINGS_GROUP" => "N",
		"LANDINGS_GROUP_FROM_SEO" => "N",
		"SMARTSEO_TAGS_BY_GROUPS" => "N",
		"SMARTSEO_TAGS_SHOW_DEACTIVATED" => "N",
		"SMARTSEO_TAGS_SORT" => "SORT",
		"SMARTSEO_TAGS_LIMIT" => "",
		"DISPLAY_LINKED_ELEMENT_SLIDER_CROSSLINK" => "5",
		"SHOW_KIT_ALL" => "N",
		"BIGDATA_EXT_BOTTOM" => "bigdata_bottom_1",
		"BIGDATA_COUNT" => "5",
		"BIGDATA_TYPE_VIEW" => "FROM_MODULE",
		"MAX_IMAGE_COUNT" => "10",
		"NO_USE_IMAGE" => "N",
		"PAGER_BASE_LINK" => "",
		"PAGER_PARAMS_NAME" => "arrPager",
		"SEF_URL_TEMPLATES" => array(
			"sections" => "catalog/",
			"section" => "catalog/#SECTION_CODE#/",
			"element" => "product/#ELEMENT_CODE#.html",
			"compare" => "compare.php?action=#ACTION_CODE#",
			"smart_filter" => "#SECTION_CODE_PATH#/filter/#SMART_FILTER_PATH#/apply/",
		),
		"VARIABLE_ALIASES" => array(
			"compare" => array(
				"ACTION_CODE" => "action",
			),
		)
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>