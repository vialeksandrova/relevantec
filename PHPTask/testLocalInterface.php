<?php

require_once(dirname(__FILE__) . '/Scenarios/General.php');
class LocalInterface extends PHPUnit_Extensions_Selenium2TestCase
{
    public $countryCode;

	protected function setUp() {
        global $argv, $argc;
        $this->countryCode = $argv[2];
        $this->setBrowser('firefox');
        $this->setBrowserUrl('http://google.com/');
    }

    public function testHeader() {
        $session = $this->prepareSession();
        $this->currentWindow()->maximize();
        $headerScenario = new GeneralScenario;
        $headerScenario->setI($this);
        $headerScenario->setTranslation($this->countryCode);
        $headerScenario->runGeneralScenario();
    }
}
?>