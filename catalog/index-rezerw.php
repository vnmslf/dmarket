<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Каталог оборудования, инструмента и материалов для производства мебели и деревообработки");
$APPLICATION->SetPageProperty("title", "Каталог товаров | Дельта-Маркет");
$APPLICATION->SetTitle("Каталог товаров");
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
		"AJAX_OPTION_JUMP" => "N",
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
			0 => "BASE",
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
			6 => "VOLTAGE_LEVEL",
			7 => "POWER",
			8 => "WORK_TEMP",
			9 => "PROP702",
			10 => "CONTAINER_VOLUME",
			11 => "PROP700",
			12 => "PROP701",
			13 => "CURRENT_FREQUENCY",
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
		"COMPARE_ELEMENT_SORT_FIELD" => "SCALED_PRICE_1",
		"COMPARE_ELEMENT_SORT_ORDER" => "asc",
		"DISPLAY_ELEMENT_SELECT_BOX" => "Y",
		"PRICE_CODE" => array(
			0 => "BASE",
			1 => "PRICE_OPT",
		),
		"USE_PRICE_COUNT" => "Y",
		"SHOW_PRICE_COUNT" => "1",
		"PRICE_VAT_INCLUDE" => "Y",
		"PRICE_VAT_SHOW_VALUE" => "N",
		"PRODUCT_PROPERTIES" => "",
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
		"ELEMENT_SORT_FIELD" => "SCALED_PRICE_1",
		"ELEMENT_SORT_ORDER" => "asc",
		"ELEMENT_SORT_FIELD2" => "SCALED_PRICE_1",
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
		"SORT_PRICES" => "BASE",
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
			9 => "VO_MAX",
			10 => "VOBR",
			11 => "DIAAMETR_D",
			12 => "DASPIR",
			13 => "DCVXODA",
			14 => "DSHF",
			15 => "MAXIMALNAYA_SKOROST_VTASCHENIA",
			16 => "MOSH_VGSH",
			17 => "MOSH_NGSH",
			18 => "MOSH_PVSH",
			19 => "VOLTAGE_LEVEL",
			20 => "OBEM_KONTEJNEROV",
			21 => "OBMESH",
			22 => "RSHIPKOR",
			23 => "HM_12000",
			24 => "Tip_Zuba",
			25 => "POWER",
			26 => "ROD_TOKA_PITAYUSHCHEJ_SETI",
			27 => "WORK_TEMP",
			28 => "PROP_RAS_804",
			29 => "PROP_RAS_805",
			30 => "PROP_RAS_806",
			31 => "PROP464",
			32 => "PROP_RAS_802",
			33 => "PROP_RAS_808",
			34 => "PROP210",
			35 => "PROP_RAS_807",
			36 => "PROP_RAS_810",
			37 => "PROP_RAS_800",
			38 => "PROP_RAS_801",
			39 => "PROP_RAS_803",
			40 => "PROP_RAS_809",
			41 => "PROP_RAS_811",
			42 => "PREHEAT_TIME",
			43 => "DAVLENIE_VOZDUHA",
			44 => "PROP702",
			45 => "DIAMETR_SHLANGA_2",
			46 => "DIAMETR_SHLANGA_1",
			47 => "DLINA_MM",
			48 => "DLINA_SHLANGA_2",
			49 => "DLINA_SHLANGA_1",
			50 => "PROP718",
			51 => "MAXIMALNAYA_VISOTA_ZAGATOVKI",
			52 => "MIN_DLINA_OBRABATIVAEMOGO_MATERIALA",
			53 => "CONTAINER_VOLUME",
			54 => "PROP700",
			55 => "RAZMER_PILNOGO_CENTRA",
			56 => "RAZMER_RABOCHEGO_STOLA",
			57 => "PROP706",
			58 => "PROP708",
			59 => "SKOROST_PODACHI_MATERIALA",
			60 => "PROP703",
			61 => "PROP707",
			62 => "TOLCHSINA_OBRABATIVAEMOGO_MATERIALA",
			63 => "PROP717",
			64 => "PROP716",
			65 => "PROP701",
			66 => "CURRENT_FREQUENCY",
			67 => "PROP704",
			68 => "PROP705",
			69 => "PROP715",
			70 => "HEIGHT_EDGE_MIN",
			71 => "DAVLENIE_PNEVMATICHESKOJ_SISTEMY_BAR",
			72 => "DIAMETR_CANHI",
			73 => "DIAMETR_SHTEKERA",
			74 => "MAKSIMANAYA_TOLSHCHINA_ZAGOTOVKI_MM",
			75 => "MAKSIMALNOE_USILIE_PRIZHIMA_PRI_DAVLENII_BAR_K",
			76 => "MAKSIMALNYJ_RASKHOD_SZHATOGO_VOZDUHA_L_MIN",
			77 => "OTVERSTIE_V_PLAST",
			78 => "PAZ",
			79 => "TOLSCHINA_SVERLENIA",
			80 => "CHISLO_OBOROTOV_HOLOSTOGO_HODA",
			81 => "VYSOTA_MM",
			82 => "DLINA_VORSA",
			83 => "IZBITOCHNOE_DAVLENIE",
			84 => "OBOROTI",
			85 => "PONIJENNOE_DAVLENIE",
			86 => "RAZMER_FORMI_MM",
			87 => "TEMPERATURNII_REJIM",
			88 => "TOLSHINA_STENOK_MEJDU_SPIRALIU",
			89 => "SHIRINA_VORSA",
			90 => "SHIRINA_OSNOVANIA",
			91 => "DLINA_SOEDINITELNOI_NITI",
			92 => "TEMPERATURA_PLAVLENIA_NITI",
			93 => "DVIGENIE_ROLIKOV",
			94 => "KOL_VO_ROLIKOV",
			95 => "KOLICHESTVO_SHPINDELEY",
			96 => "KOLICHESTVO_SVERLILNIH_TRAVERS",
			97 => "MAX_GLUBINA_SVERLENIYA",
			98 => "RAZMER_ROLIKOV",
			99 => "ASSTOYNIE_MEJDU_2_VNESHNIMI_SPINDELYAMI",
			100 => "RASSTOYNIE_MEJDU_2_KRAINIMI_SPINDELYAMI",
			101 => "CHASTOTA_VRASHCENIYA_SPINDELEY",
			102 => "VNUTRENNIJ_GABARIT_RAMKI",
			103 => "MIN_RAZMER_ZAGOTOVKI_DLYA_UPAKOVKI",
			104 => "RAZMER_LENTY",
			105 => "SKOROST_OBVYAZKI",
			106 => "KOLICHESTVO_SKOROSTEI",
			107 => "RASSTOYANIE_MEJDU_ROLIKAMI",
			108 => "RASSTOYANIE_MEJDU_CENTRAMI_KRAINIH_ROLIKOV",
			109 => "PROP2001NEW",
			110 => "PROP2000NEW",
			111 => "PROP500NEW",
			112 => "PROPRPM",
			113 => "PROP741",
			114 => "PROP1703",
			115 => "HEIGHT_EDGE_MAX",
			116 => "PROP720",
			117 => "PROP901",
			118 => "PROP900",
			119 => "PROP803",
			120 => "PROP805",
			121 => "PROP809",
			122 => "PROP810",
			123 => "PROP1102_2",
			124 => "PROP724",
			125 => "PROP1100",
			126 => "PROP729",
			127 => "PROP730",
			128 => "PROP1103",
			129 => "PROP1101",
			130 => "PROP806",
			131 => "PROP811",
			132 => "PROP1102",
			133 => "PROP735",
			134 => "PROP732",
			135 => "PROP722",
			136 => "PROP733",
			137 => "PROP734",
			138 => "PROP721",
			139 => "PROP812",
			140 => "PROP800",
			141 => "PROP807",
			142 => "PROP1702",
			143 => "PROP731",
			144 => "PROP742",
			145 => "PROP723",
			146 => "PROP726",
			147 => "PROP1105",
			148 => "PROP740",
			149 => "PROP801",
			150 => "PROP808",
			151 => "PROP1104",
			152 => "PROP1102_3",
			153 => "PROP705_2",
			154 => "RAZMERY_PILNOGO_POLOTNA_MM",
			155 => "SKOROST_REZANIYA_M_MIN",
			156 => "SECHENIE_OBRABATYVAEMOJ_DETALI_PRI_90_MM",
			157 => "SECHENIE_OBRABATYVAEMOJ_DETALI_PRI_45_MM",
			158 => "SECHENIE_OBRABATYVAEMOJ_DETALI_PRI_60_MM",
			159 => "SECHENIE_OBRABATYVAEMOJ_DETALI_PRI_MINUS_45_MM",
			160 => "PROPTOLSCH",
			161 => "TIP_SVERLA",
			162 => "HVOSTOVIK",
			163 => "VRACHENIE",
			164 => "VNESHNII_DIAMETR",
			165 => "DIAMETR_HVOSTOVIKA",
			166 => "PROPINS6001",
			167 => "PROP2001",
			168 => "VID_FREZY",
			169 => "VNUTRENNII_DIAMETR",
			170 => "PROP6002",
			171 => "PROP6001",
			172 => "PROP6005",
			173 => "PROP6006",
			174 => "PROPINS6005",
			175 => "PROP6007",
			176 => "PROP6008",
			177 => "DLINA_REJUCHSEI_CHASTI_NOJA",
			178 => "PROPINS6002",
			179 => "PROPINS6003",
			180 => "PROPINS6004",
			181 => "PROPTOLZUB",
			182 => "PROPTOLPOL",
			183 => "PROPGRIT",
			184 => "VISOTA_ALMAZA_MM",
			185 => "TIP_KLEYA",
			186 => "FOUNDATION",
			187 => "APPEARANCE",
			188 => "COLOR_KLEY",
			189 => "PROP7000",
			190 => "REKOMENDACII_TIPA_STANKA",
			191 => "WORK_TEMP_KLEY",
			192 => "PROP_369",
			193 => "SOFTENING_POINT",
			194 => "PROP_368",
			195 => "MEMBRANE_TEMPERATURE",
			196 => "MELTING_INDEX",
			197 => "NOMINAL_VISCOSITY_IN_A_CIRCLE_IUD",
			198 => "VYAZKOST_CPS",
			199 => "MFT",
			200 => "MOISTURE_OF_BONDED_ELEMENTS",
			201 => "TENSILE_STRENGTH_AT_SEPARATION",
			202 => "BARREL_TEMPERATURE",
			203 => "PROP_370",
			204 => "DENSITY",
			205 => "STRETCHING",
			206 => "INDOOR_TEMPERATURE",
			207 => "ROLL_TEMPERATURE",
			208 => "ACTIVATION_TEMPERATURE",
			209 => "MINIMUM_FILM_FORMATION_TEMPERATURE",
			210 => "SETTING_TIME",
			211 => "OPEN_TIME",
			212 => "HEAT_RESISTANCE",
			213 => "MOVEMENT_SPEED",
			214 => "NOZZLE_DIAMETER",
			215 => "DRYING_TIME",
			216 => "PRESSING_TIME",
			217 => "PH_ISO976",
			218 => "DILUTION",
			219 => "APPLICATION_METHOD",
			220 => "COMPRESSION_PRESSURE",
			221 => "COMPRESSION_SPRAYING",
			222 => "CONSUMPTION",
			223 => "MASS_FRACTION_OF_RESIDUAL_MONOMER",
			224 => "MASS_FRACTION_OF_DRY_MATTER",
			225 => "HYDROGEN_ION_CONCENTRATION_INDEX",
			226 => "FREEZE_RESISTANCE_OF_THE_ADHESIVE",
			227 => "SEDIMENTATION_ON_DILUTION",
			228 => "RASHOD_KLEYA_1",
			229 => "RASHOD_KLEYA_2",
			230 => "TEMPERATURA_REAKCIONNOI_SPOSOBNOSTI",
			231 => "MAX_CUTTING_LENGTH",
			232 => "MAX_HEIGHT_MATERIAL_TO_CUT",
			233 => "MAIN_SAW",
			234 => "ENGINE_POWER",
			235 => "ROTATIONAL_SPEED",
			236 => "SAW_DIAMETER",
			237 => "LANDING_DIAMETER",
			238 => "SCORING_SAW",
			239 => "PROP102",
			240 => "PROP103",
			241 => "PROP104",
			242 => "PROP105",
			243 => "PROP106",
			244 => "PROP107",
			245 => "DAVLENIE_V_PNEVMOSISTEME_ATM",
			246 => "DIAMETR_SHPINDELEJ_MM",
			247 => "MOSHCHNOST_DVIGATELYA_PODYOMA_TRAVERSY_KVT",
			248 => "MOSHCHNOST_DVIGATELYA_PODACHI_KVT",
			249 => "MOSHCHNOST_NIZHNEGO_GORIZ_SHPINDELYA_KVT",
			250 => "MOSHCHNOST_PRAVOGO_VERTIK_SHPINDELYA_KVT",
			251 => "MOSHCHNOST_LEVOGO_VERTIK_SHPINDELYA_KVT",
			252 => "MOSHCHNOST_1GO_VERHNEGO_GORIZ_SHPINDELYA_KVT",
			253 => "MOSHCHNOST_2GO_NIZHNEGO_GORIZ_SHPINDELYA_KVT",
			254 => "RAZOST",
			255 => "HOD_KARETKI_MM",
			256 => "NAKLON_PILY_GRAD",
			257 => "RAZPODKAR",
			258 => "SPOSOB_PODACHI_ZAGOTOVOK",
			259 => "VERTIKALNYJ_HOD_SHPINDELYA_MM",
			260 => "UGOL_NAKLONA_RABOCHEGO_STOLA",
			261 => "DIAMETR_VALA_MM",
			262 => "CANGA",
			263 => "NAIB_SHIRINA_FUGOVANIYA_REJSMUSOVANIYA_MM",
			264 => "TOLSHCHINA_PRI_REJSMUSOVANII_MM",
			265 => "SKOROST_PODACHI_PRI_REJSMUSOVANII_M_MIN",
			266 => "CHASTOTA_VRASHCHENIYA_NOZHEVOGO_VALA",
			267 => "RAZMERY_UPORA_MM",
			268 => "UGOL_NAKLONA_UPORA_GRAD",
			269 => "MAKSIMALNAYA_TOLSHCHINA_SNIMAEMOGO_SLOYA",
			270 => "DIAMETR_NOZHEVOGO_VALA",
			271 => "MOSHCHNOST_EL_DVIGATELYA_VENTILYATORA_KVT",
			272 => "MOSHCHNOST_EL_DVIGATELYA_VIBROOCHISTKI_KVT",
			273 => "RAZRYAZHENIE_VENTILYATORA_PA",
			274 => "PLOSHCHAD_FILTRACII",
			275 => "KOLICHESTVO_FILTROV_SHT",
			276 => "RAZMER_PATRUBKA_ASPIRACII_MM",
			277 => "KOLICHESTVO_KONTEJNEROV_SHT",
			278 => "NARUZHNYJ_DIAMETR_DISKOVYH_PIL_MM",
			279 => "DIAMETRY_FREZ_MM",
			280 => "HOD_RABOCHEGO_STOLA_MM",
			281 => "CHASTOTA_VRASHCHENIYA_SHLIFOVALNOGO_KRUGA_OB_MIN",
			282 => "DIAMETRY_VTULOK_POD_NASADNOJ_INSTRUMENT_MM",
			283 => "PROP20",
			284 => "PROP201",
			285 => "PROP202",
			286 => "PROP203",
			287 => "PROP204",
			288 => "PROP205",
			289 => "PROP206",
			290 => "PROP207",
			291 => "PROP208",
			292 => "PROP209",
			293 => "PROP211",
			294 => "PROP212",
			295 => "PROP213",
			296 => "PROP214",
			297 => "PROP215",
			298 => "PROP216",
			299 => "PROP217",
			300 => "PROP218",
			301 => "PROP301",
			302 => "PROP302",
			303 => "PROP303",
			304 => "PROP305",
			305 => "PROP306",
			306 => "PROP307",
			307 => "PROP308",
			308 => "PROP309",
			309 => "PROP310",
			310 => "PROP323",
			311 => "PROP311",
			312 => "PROP313",
			313 => "PROP314",
			314 => "PROP315",
			315 => "PROP316",
			316 => "PROP319",
			317 => "PROP321",
			318 => "PROP400",
			319 => "PROP401",
			320 => "PROP402",
			321 => "PROP403",
			322 => "PROP412",
			323 => "PROP413",
			324 => "PROP410",
			325 => "PROP411",
			326 => "PROP404",
			327 => "PROP405",
			328 => "PROP408",
			329 => "PROP422",
			330 => "PROP304",
			331 => "PROP423",
			332 => "PROP424",
			333 => "PROP414",
			334 => "PROP415",
			335 => "PROP416",
			336 => "PROP118",
			337 => "PROP300",
			338 => "PROP417",
			339 => "PROP418",
			340 => "PROP419",
			341 => "PROP420",
			342 => "PROP425",
			343 => "PROP426",
			344 => "PROP427",
			345 => "PROP428",
			346 => "PROP429",
			347 => "PROP430",
			348 => "PROP431",
			349 => "PROP432",
			350 => "PROP433",
			351 => "PROP434",
			352 => "PROP435",
			353 => "PROP436",
			354 => "PROP437",
			355 => "PROP438",
			356 => "PROP439",
			357 => "PROP450",
			358 => "PROP451",
			359 => "PROP452",
			360 => "PROP453",
			361 => "PROP454",
			362 => "PROP455",
			363 => "PROP456",
			364 => "PROP457",
			365 => "PROP458",
			366 => "PROP459",
			367 => "PROP460",
			368 => "PROP470",
			369 => "PROP461",
			370 => "PROP462",
			371 => "PROP463",
			372 => "PROP465",
			373 => "PROP466",
			374 => "PROP467",
			375 => "PROP468",
			376 => "PROP469",
			377 => "PROP471",
			378 => "PROP472",
			379 => "PROP473",
			380 => "PROP474",
			381 => "PROP476",
			382 => "PROP477",
			383 => "PROP478",
			384 => "PROP479",
			385 => "PROP480",
			386 => "PROP481",
			387 => "PROP482",
			388 => "PROP483",
			389 => "PROP484",
			390 => "PROP485",
			391 => "PROP486",
			392 => "PROP487",
			393 => "PROP488",
			394 => "PROP489",
			395 => "PROP490",
			396 => "PROP491",
			397 => "PROP492",
			398 => "PROP493",
			399 => "PROP494",
			400 => "PROP6009",
			401 => "PROPBASE600",
			402 => "VID_YPAK",
			403 => "SIZE",
			404 => "PROPBASE601",
			405 => "SIZE_TRANS",
			406 => "WEIGHT",
			407 => "BRUTTO",
			408 => "SHTRIHCOD",
			409 => "KOD_TN_VED",
			410 => "GABARITY_MM",
			411 => "PROP2000",
			412 => "7124",
			413 => "VSTROENNYY_FILTR_OTDELENIE_CHASTITS_MKM",
			414 => "GABARITY_D_SH_V_MM",
			415 => "DAVLENIE_ATM",
			416 => "DAVLENIE_BAR",
			417 => "DIAPAZON_IZMERENIYA",
			418 => "DIAPAZON_PEREPADA_DAVLENIYA",
			419 => "DIAPAZON_RABOCHEGO_DAVLENIYA",
			420 => "DIAPAZON_RABOCHIKH_TEMPERATUR_C",
			421 => "ZASHCHITNOE_POKRYTIE",
			422 => "MAKS_RABOCHEE_DAVLENIE_BAR_PSI",
			423 => "MAKS_DAVLENIE_BAR_PSI",
			424 => "MAKSIMALNYY_PEREPAD_DAVLENIYA",
			425 => "OBEM_RESIVERA_L",
			426 => "PROIZVODITELNOST_VKHOD_L_MIN",
			427 => "PROIZVODITELNOST_VYKHOD_L_MIN",
			428 => "PROIZVODITELNOST_L_MIN",
			429 => "PROIZVODITELNOST_M_MIN",
			430 => "RABOCHAYA_TEMPERATURA",
			431 => "RABOCHAYA_TEMPERATURA_ATMOSFERNYY_VOZDUKH",
			432 => "RABOCHAYA_TEMPERATURA_SZHATYY_VOZDUKH",
			433 => "RABOCHEE_DAVLENIE",
			434 => "RABOCHEE_DAVLENIE_C",
			435 => "RABOCHEE_DAVLENIE_F",
			436 => "RABOCHEE_DAVLENIE_BAR",
			437 => "RABOCHEE_DAVLENIE_BAR_PSI",
			438 => "TEMPERATURA_VOZDUKHA_NA_VSASYVANIE_S",
			439 => "TIP_DVIGATELYA",
			440 => "TIP_KOMPRESSORA",
			441 => "TIP_PRIVODA",
			442 => "PROP6010",
			443 => "SHIRINA_MM",
			444 => "",
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
		"SHOW_ADDITIONAL_TAB" => "N",
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
		"SHOW_EMPTY_STORE" => "N",
		"SHOW_GENERAL_STORE_INFORMATION" => "N",
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
		"PAGER_BASE_LINK_ENABLE" => "N",
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
		"TAB_DOPS_NAME" => "",
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
		"SORT_REGION_PRICE" => "BASE",
		"SHOW_SECTION_DESC" => "Y",
		"USE_ADDITIONAL_GALLERY" => "Y",
		"ADDITIONAL_GALLERY_TYPE" => "BIG",
		"ADDITIONAL_GALLERY_PROPERTY_CODE" => "MORE_PHOTO1",
		"ADDITIONAL_GALLERY_OFFERS_PROPERTY_CODE" => "MORE_PHOTO",
		"BLOCK_ADDITIONAL_GALLERY_NAME" => "Фотогалерея",
		"STORES_FILTER" => "AMOUNT",
		"STORES_FILTER_ORDER" => "SORT_DESC",
		"VIEW_BLOCK_TYPE" => "N",
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
		"DETAIL_BLOCKS_TAB_ORDER" => "desc,char,video,stores,reviews,buy,payment,delivery,custom_tab,buy_services",
		"DETAIL_BLOCKS_ALL_ORDER" => "complect,goods,nabor,offers,modules,desc,char,buy,payment,delivery,video,stores,custom_tab,services,news,blog,reviews,staff,vacancy,gifts",
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
		"DISPLAY_LINKED_ELEMENT_SLIDER_CROSSLINK" => "",
		"SHOW_KIT_ALL" => "N",
		"BIGDATA_EXT_BOTTOM" => "bigdata_bottom_1",
		"BIGDATA_COUNT" => "5",
		"BIGDATA_TYPE_VIEW" => "FROM_MODULE",
		"MAX_IMAGE_COUNT" => "10",
		"NO_USE_IMAGE" => "N",
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