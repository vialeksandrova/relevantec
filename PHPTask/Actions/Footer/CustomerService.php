<?php
require_once(dirname(dirname(__FILE__)) . '/General.php');

class FooterActionsCustomerService extends GeneralActions
{
    public function goToMyAccount()
    {
        $this->byCssSelector('.st_footer_customerService_myAccount')->click();
        $this->iAmOn('LoginOrRegister');
    }

    public function goToReturns()
    {
        $this->byCssSelector('.st_footer_customerService_returns')->click();
        $this->iAmOn('Returns');
    }

    public function goToContactPage()
    {
        $this->byCssSelector('.st_footer_customerService_contacts')->click();
        $this->iAmOn('Contact');
    }
}
