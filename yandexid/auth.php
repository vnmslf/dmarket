<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

use Bitrix\Main\Loader;
Loader::includeModule("yandexpay.yandexid");

if(isset($_REQUEST['access_token'])){
  YandexID::authUser($_REQUEST['access_token']);
} else {
  echo 'Не передан токен для авториазции';
}

?>