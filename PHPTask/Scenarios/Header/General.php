<?php
require_once(dirname(dirname(__FILE__)) . '/' . '../Actions/Header/General.php');

class HeaderScenarioGeneral extends HeaderActionsGeneral {

    public $searchWord = "test";

    public $pageSpecificElements = array(
        'Homepage' 	=> '.home',
        'SearchResults' => '.search > strong:nth-child(1)'
        'LoginOrRegister' => '.register.content-crumb',
        'Returns' => '.page-title h1',
        'Contact' => '.page-title h1',
    );

    public function runHeaderScenarioGeneral() {
        $this->clickOnLogo();
        $this->searchAndPressEnter();
        $this->searchAndClickButton();
    }
}
?>