<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Контакты | «Дельта-Маркет»");
$APPLICATION->SetPageProperty("description", "Контактная информация интернет-магазина «Дельта-Маркет»");
$APPLICATION->SetTitle("Контактная информация");?>

<?CMax::ShowPageType('page_contacts');?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>