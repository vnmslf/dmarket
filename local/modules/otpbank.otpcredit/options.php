<?php
use Bitrix\Main\HttpApplication;
use Bitrix\Main\Loader;
use Bitrix\Main\Config\Option;

$request = HttpApplication::getInstance()->getContext()->getRequest();

$module_id = htmlspecialcharsbx($request["mid"] != "" ? $request["mid"] : $request["id"]);

Loader::includeModule($module_id);

$aTabs = array(
    array(
        "DIV" => "edit",
        "TAB" => "Настройки СП ОТП",
        "TITLE" => "Настройки СП ОТП",
        "OPTIONS" => array(
            "Данные для API",
            array(
                "login",
                "Логин",
                "",
                array("text", 5)
            ),

            array(
                "password",
                "Пароль",
                "",
                array("text", 5)
            ),

            "ID Платежной системы",
            array(
                "psid",
                "ID",
                "",
                array("text", 5)
            ),

        )
    )
);

if($request->isPost() && check_bitrix_sessid()){

    foreach($aTabs as $aTab){

        foreach($aTab["OPTIONS"] as $arOption){

            if(!is_array($arOption)) {
                continue;
            }

            if($arOption["note"]){
                continue;
            }

            if($request["apply"]){

                $optionValue = $request->getPost($arOption[0]);

                if($arOption[0] == "switch_on"){

                    if($optionValue == ""){

                        $optionValue = "N";
                    }
                }

                Option::set($module_id, $arOption[0], is_array($optionValue) ? implode(",", $optionValue) : $optionValue);

            } elseif ($request["default"]) {

                Option::set($module_id, $arOption[0], $arOption[2]);
            }
       }
   }

   LocalRedirect($APPLICATION->GetCurPage()."?mid=".$module_id."&lang=".LANG);
}

$tabControl = new CAdminTabControl(
    "tabControl",
    $aTabs
);

$tabControl->Begin();
?>

<form method="post">

<?php
   foreach($aTabs as $aTab){
        if($aTab["OPTIONS"]){
            $tabControl->BeginNextTab();
            __AdmSettingsDrawList($module_id, $aTab["OPTIONS"]);
        }
    }
   $tabControl->Buttons();
?>

<input type="submit" name="apply" class="adm-btn-save" value="Сохранить"/>

<?php
    echo(bitrix_sessid_post());
?>

</form>

<?php
$tabControl->End();