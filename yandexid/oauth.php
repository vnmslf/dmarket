<?
use Bitrix\Main\Config\Option;

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

$callbackUrl = Option::get("yandexpay.yandexid", 'yandexid_domain', '', SITE_ID);
$callbackUrl = !empty($callbackUrl) ? $callbackUrl : $_SERVER['HTTP_HOST'];
$originUrl = (CMain::IsHTTPS() ? "https://" : "http://") . $callbackUrl . '/yandexid/auth.php'; 

?>

<!DOCTYPE html>
<html>
  <head>
    <script src="https://yastatic.net/s3/passport-sdk/autofill/v1/sdk-suggest-token-with-polyfills-latest.js"></script>
  </head>

  <body>
    Авторизация...
    
    <script>

      let origin = '<?=$originUrl?>';  
      let extraData = {};

      window.addEventListener("load", function(event) {
        YaSendSuggestToken(origin, extraData);
      });

    </script>    

  </body>  
</html>