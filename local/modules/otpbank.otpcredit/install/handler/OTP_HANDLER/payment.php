<?php
//Collation: utf8_general_ci;
use Bitrix\Sale;

$TRADE_ID = CSalePaySystemAction::GetParamValue("TRADE_ID");
$CREDIT_TYPE = CSalePaySystemAction::GetParamValue("CREDIT_TYPE");

$ORDER_ID = $_GET['ORDER_ID'];
if (!$ORDER_ID) {
	$ORDER_ID = $_POST['accountNumber'];
};

if (!$ORDER_ID) {
	$ORDER_ID = explode('orders/', $_SERVER['REQUEST_URI'])[1];
}

$order = Sale\Order::load($ORDER_ID);
$basket = Sale\Basket::loadItemsForOrder($order);
$basketItems = $basket->getBasketItems();
$basketToSend = array();

foreach ($basketItems as $el) {
	$elProps = array(
		"name"=> str_replace('"', "", $el->getField('NAME')),
		"price"=> $el->getPrice(),
		"quantity"=> $el->getQuantity(),
	);
    array_push($basketToSend, $elProps);
};

$params = array(
	"tradeID"=> $TRADE_ID,
	"creditType"=> $CREDIT_TYPE,
	"goods"=> $basketToSend,
	"orderID"=>$ORDER_ID,
);

$urlParams = (string) http_build_query($params, '', '&');
$linkBlock = "<p style='margin: 12px 0'>Если окно с формой не открылось автоматически, нажмите на ссылку <a target='_blank' href='https://ecom.otpbank.ru/smart-form?".$urlParams."'>Оплатить</a></p>";
echo $linkBlock;

?>

<script>
	window.onload = function(){
		window.open(`https://ecom.otpbank.ru/smart-form?<?php echo $urlParams ?>`, "_blank");
	}
</script>