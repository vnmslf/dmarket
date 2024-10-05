<?php
namespace Otpbank\Otpcredit;

use Bitrix\Main\Web\HttpClient;
use Bitrix\Sale;
use Bitrix\Main\Config\Option;

class Agent {
	public static function otpAgent() {
		$httpClient = new HttpClient();
		//$httpClient->disableSslVerification();
		$url = 'https://ecom.otpbank.ru/auth/realms/ldg-poc/protocol/openid-connect/token';

		$postParams = array(
			'grant_type' => 'password',
			'client_id' => 'poc',
			'username' => Option::get('otpbank.otpcredit', 'login'),
			'password' => Option::get('otpbank.otpcredit', 'password'),
		);

		$responseString = $httpClient->post($url, $postParams);
		$token = json_decode($responseString)->access_token;
		$httpClient->setHeader('Authorization', 'Bearer '.$token, true);
		$url = 'https://ecom.otpbank.ru/broker/core/api/v1/states?page=0&size=100';
		$processes = json_decode($httpClient->get($url))->_embedded->stateList;
		$statuses = array();
		foreach ($processes as $process)
        {
            $statuses[] = array(
                "id" => $process->orderId,
                "status"=>$process->status
            );
        }

        $connection = \Bitrix\Main\Application::getConnection();
        $sql = 'SELECT ID FROM b_sale_order WHERE PAY_SYSTEM_ID = '.Option::get('otpbank.otpcredit', 'psid').' AND PAYED = "N"';
		$recordset = $connection->query($sql);        
        $recordID = array();
		while ($record = $recordset->fetch())
        {
            $recordID[] = $record['ID'];
        }

		\Bitrix\Main\Loader::includeModule("sale");
        foreach ($statuses as $check) {
            if (in_array($check['id'], $recordID)) {
				if ($check['status'] == 'AGREEMENT_AUTHORIZED' || $check['status'] == 'AGREEMENT_PAID' || $check['status'] == 'PAYMENT_ORDER') {

					$order = Sale\Order::load($check['id']);
					$paymentCollection = $order->getPaymentCollection();
					foreach ($paymentCollection as $payment)
					{
						$payment->setPaid('Y');
					}

					$order->setField("STATUS_ID", "P");
					$order->save();

				} elseif ($check['status'] == 'NOT_PAYABLE' || $check['status'] == 'REJECTED' || $check['status'] == 'EXECUTION_ERROR' || $check['status'] == 'CANCEL_AUTHORIZATION' || $check['status'] == 'ARCHIVE' || $check['status'] == 'FAILED') {

                    $order = Sale\Order::load($check['id']);
					$order->setField('CANCELED', 'Y');
					$order->save();

                }
            }
        }
		return "\\Otpbank\\Otpcredit\\Agent::otpAgent();";
	}
};