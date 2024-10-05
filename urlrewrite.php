<?php
$arUrlRewrite=array (
  7 => 
  array (
    'CONDITION' => '#^/bitrix/services/ymarket/([\\w\\d\\-]+)?(/)?(([\\w\\d\\-]+)(/)?)?#',
    'RULE' => 'REQUEST_OBJECT=$1&METHOD=$4',
    'ID' => '',
    'PATH' => '/bitrix/services/ymarket/index.php',
    'SORT' => 100,
  ),
  50 => 
  array (
    'CONDITION' => '#^={\\Bitrix\\Rest\\Marketplace\\Url::getConfigurationUrl()}#',
    'RULE' => '',
    'ID' => 'bitrix:rest.configuration',
    'PATH' => '/marketplace/configuration/index.php',
    'SORT' => 100,
  ),
  46 => 
  array (
    'CONDITION' => '#^/bitrix/services/yandex.market/trading/#',
    'RULE' => '',
    'ID' => '',
    'PATH' => '/bitrix/services/yandex.market/trading/index.php',
    'SORT' => 100,
  ),
  62 => 
  array (
    'CONDITION' => '#^/personal/history-of-orders/#',
    'RULE' => '',
    'ID' => 'bitrix:sale.personal.order',
    'PATH' => '/personal/history-of-orders/index.php',
    'SORT' => 100,
  ),
  6 => 
  array (
    'CONDITION' => '#^/bitrix/services/ymarket/#',
    'RULE' => '',
    'ID' => '',
    'PATH' => '/bitrix/services/ymarket/index.php',
    'SORT' => 100,
  ),
  55 => 
  array (
    'CONDITION' => '#^/company/partners/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/company/partners_/index.php',
    'SORT' => 100,
  ),
  57 => 
  array (
    'CONDITION' => '#^/company/licenses/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/company/licenses/index.php',
    'SORT' => 100,
  ),
  56 => 
  array (
    'CONDITION' => '#^/company/reviews/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/company/reviews_/index.php',
    'SORT' => 100,
  ),
  58 => 
  array (
    'CONDITION' => '#^/company/vacancy/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/company/vacancy_/index.php',
    'SORT' => 100,
  ),
  59 => 
  array (
    'CONDITION' => '#^/contacts/stores/#',
    'RULE' => '',
    'ID' => 'bitrix:catalog.store',
    'PATH' => '/contacts/stores/index.php',
    'SORT' => 100,
  ),
  54 => 
  array (
    'CONDITION' => '#^/company/staff/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/company/staff/index.php',
    'SORT' => 100,
  ),
  52 => 
  array (
    'CONDITION' => '#^/company/news/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/company/news/index.php',
    'SORT' => 100,
  ),
  53 => 
  array (
    'CONDITION' => '#^/company/docs/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/company/docs/index.php',
    'SORT' => 100,
  ),
  49 => 
  array (
    'CONDITION' => '#^/sharebasket/#',
    'RULE' => '',
    'ID' => 'aspro:basket.share.max',
    'PATH' => '/sharebasket/index.php',
    'SORT' => 100,
  ),
  69 => 
  array (
    'CONDITION' => '#^/info/brands/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/info_/brands_/index.php',
    'SORT' => 100,
  ),
  47 => 
  array (
    'CONDITION' => '#^/lookbooks/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/lookbooks_/index.php',
    'SORT' => 100,
  ),
  71 => 
  array (
    'CONDITION' => '#^/2products/#',
    'RULE' => '',
    'ID' => 'bitrix:catalog',
    'PATH' => '/2/products/index.php',
    'SORT' => 100,
  ),
  72 => 
  array (
    'CONDITION' => '#^/2services/#',
    'RULE' => '',
    'ID' => 'bitrix:catalog',
    'PATH' => '/2/services/index.php',
    'SORT' => 100,
  ),
  79 => 
  array (
    'CONDITION' => '#^/wholesale/#',
    'RULE' => '',
    'ID' => 'bitrix:sale.personal.section',
    'PATH' => '/wholesale/index.php',
    'SORT' => 100,
  ),
  51 => 
  array (
    'CONDITION' => '#^/projects/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/projects_/index.php',
    'SORT' => 100,
  ),
  60 => 
  array (
    'CONDITION' => '#^/contacts/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/contacts/page_contacts_2.php',
    'SORT' => 100,
  ),
  63 => 
  array (
    'CONDITION' => '#^/landings/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/landings_/index.php',
    'SORT' => 100,
  ),
  67 => 
  array (
    'CONDITION' => '#^/services/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/services/index.php',
    'SORT' => 100,
  ),
  68 => 
  array (
    'CONDITION' => '#^/info/faq/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/info_/faq/index.php',
    'SORT' => 100,
  ),
  78 => 
  array (
    'CONDITION' => '#^/personal/#',
    'RULE' => '',
    'ID' => 'bitrix:sale.personal.section',
    'PATH' => '/personal/index.php',
    'SORT' => 100,
  ),
  65 => 
  array (
    'CONDITION' => '#^/gallery/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/gallery/index.php',
    'SORT' => 100,
  ),
  48 => 
  array (
    'CONDITION' => '#^/brands/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/brands/index.php',
    'SORT' => 100,
  ),
  73 => 
  array (
    'CONDITION' => '#^/testbx/#',
    'RULE' => '',
    'ID' => 'bitrix:catalog',
    'PATH' => '/testbx/index.php',
    'SORT' => 100,
  ),
  70 => 
  array (
    'CONDITION' => '#^/2news/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/2/news/index.php',
    'SORT' => 100,
  ),
  64 => 
  array (
    'CONDITION' => '#^/auth/#',
    'RULE' => '',
    'ID' => 'aspro:auth.max',
    'PATH' => '/auth/index.php',
    'SORT' => 100,
  ),
  74 => 
  array (
    'CONDITION' => '#^/blog/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/blog/index.php',
    'SORT' => 100,
  ),
  76 => 
  array (
    'CONDITION' => '#^/sale/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/sale/index.php',
    'SORT' => 100,
  ),
  80 => 
  array (
    'CONDITION' => '#^/#',
    'RULE' => '',
    'ID' => 'bitrix:catalog',
    'PATH' => '/catalog/index.php',
    'SORT' => 100,
  ),
);
