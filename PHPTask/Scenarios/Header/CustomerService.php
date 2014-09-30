<?php
require_once(dirname(dirname(__FILE__)) . '/' . '../Actions/Header/CustomerService.php');

class HeaderScenarioCustomerService extends HeaderActionsCustomerService {

    public $pageSpecificElements = array(
        'LoginOrRegister' => '.register.content-crumb',
        'SizeTables' => '.page-title h1',
        'Returns' => '.page-title h1',
        'FAQ' => '.page-title h1',
        'Contact' => '.page-title h1',
        'LoginOrRegister' => '.register.content-crumb',
        'Returns' => '.page-title h1',
        'Contact' => '.page-title h1',
    );
    public function runHeaderScenarioCustomerService() {
        $this->goToMyAccount();
        $this->goToSizeTables();
        $this->goToReturns();
        $this->goToFAQ();
        $this->goToContactPage();
    }
}

?>