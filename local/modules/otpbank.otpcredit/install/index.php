<?php 
use Bitrix\Main\Localization\Loc;
use Bitrix\Main\ModuleManager;
use Bitrix\Main\Config\Option;
use Bitrix\Main\EventManager;
use Bitrix\Main\Application;
use Bitrix\Main\IO\Directory;

Loc::loadMessages(__FILE__);

class otpbank_otpcredit extends CModule {
    public function __construct() {

        if(file_exists(__DIR__."/version.php")){
            $arModuleVersion = array();
            include_once(__DIR__."/version.php");
      
            $this->MODULE_ID = str_replace("_", ".", get_class($this));
            $this->MODULE_VERSION = $arModuleVersion["VERSION"];
            $this->MODULE_VERSION_DATE = $arModuleVersion["VERSION_DATE"];
            $this->MODULE_NAME = Loc::getMessage("OTPCREDIT_NAME");
            $this->MODULE_DESCRIPTION  = Loc::getMessage("OTPCREDIT_DESCRIPTION");
            $this->PARTNER_NAME = Loc::getMessage("OTPCREDIT_PARTNER_NAME");
            $this->PARTNER_URI = Loc::getMessage("OTPCREDIT_PARTNER_URI");
        }

        return false;
    }

    public function DoInstall() {
        $this->installFiles();
        \Bitrix\Main\ModuleManager::registerModule($this->MODULE_ID);
        CAgent::AddAgent(
            "\Otpbank\Otpcredit\Agent::otpAgent();",
            "otpbank.otpcredit",
            "N",
            3600,
            "",
            "Y",
            "",
            100
        );
        return true;
    }
    
    public function DoUninstall() {
        $this->uninstallFiles();
        \Bitrix\Main\ModuleManager::unRegisterModule($this->MODULE_ID);
        CAgent::RemoveAgent(
            "\Otpbank\Otpcredit\Agent::otpAgent();",
            "otpbank.otpcredit",
        );
        return true;
    }

    public function installFiles() {
		CopyDirFiles(
       		__DIR__."/handler",
            Application::getDocumentRoot()."/bitrix/php_interface/include/sale_payment",
       		true,
       		true
    	);
    return true;
    }

    public function uninstallFiles() {
        DeleteDirFilesEx("/bitrix/php_interface/include/sale_payment/OTP_HANDLER");
        return true;
    }
}

?>