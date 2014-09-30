<?php

require_once(dirname(dirname(__FILE__)) . '/General.php');

class HeaderActionsUser extends GeneralActions {

    public function goToAccountInformation() {
        $this->hoverOnMyAccount();
        //$this->byCssSelector('.personal-data > ul:nth-child(2) > li:nth-child(1) > a:nth-child(1)')->click();
        $this->byCssSelector('.st_header_user_accountInformation');
        sleep(3);
        $this->iAmOn('AccountOverview');
    }

    public function goToAddresses() {
        $this->hoverOnMyAccount();
        //$this->byCssSelector('.personal-data > ul:nth-child(2) > li:nth-child(2) > a:nth-child(1)')->click();
        $this->byCssSelector('.st_header_user_accountAddress');
        sleep(3);
        $this->iAmOn('AccountAddresses');
    }

    public function goToPasswordChange() {
        $this->hoverOnMyAccount();
        //$this->byCssSelector('.personal-data > ul:nth-child(2) > li:nth-child(3) > a:nth-child(1)')->click();
        $this->byCssSelector('.st_header_user_accountPasswordChange');
        $this->iAmOn('AccountPasswordChange');
    }

    public function goToLogout() {
        $this->hoverOnMyAccount();
        //$this->byCssSelector('.personal-data > ul:nth-child(2) > li:nth-child(4) > a:nth-child(1)')->click();
        $this->byCssSelector('.st_header_user_accountLogout');
        $this->iAmOn('Logout', null, 1);   //we are skipping the check because there is redirect to the home page
    }

    public function goToNewslettersManagement() {
        $this->hoverOnMyAccount();
        //$this->byCssSelector('.other-data > ul:nth-child(5) > li:nth-child(1) > a:nth-child(1)')->click();
        $this->byCssSelector('.st_header_user_accountNewsletter');
        $this->iAmOn('AccountNewsletter');
    }

    public function goToMyOrders() {
        $this->hoverOnMyAccount();
        //$this->byCssSelector('.other-data > ul:nth-child(2) > li:nth-child(1) > a:nth-child(1)')->click();
        $this->byCssSelector('.st_header_user_accountOrders');
        $this->iAmOn('AccountOrder');
    }

    public function login() {
        $this->hoverOnLoginDropdown();
        $this->byCssSelector('#email_login')->click();
        $this->keys($this->login);
        $this->byCssSelector('#pass')->click();
        $this->keys($this->password);
        $this->byCssSelector('#send2')->click();
        $this->iAmOn('AccountOverview');
    }

    public function goToRegister() {
        $this->hoverOnLoginDropdown();
        //$this->byCssSelector('div.form-decoration-button:nth-child(3) > button:nth-child(1)')->click();
        $this->byCssSelector('.st_header_user_accountRegister');
        $this->iAmOn('LoginOrRegister');
    }

    public function goToPasswordRecovery() {
        $this->hoverOnLoginDropdown();
        //$this->byCssSelector('.col-1 > a:nth-child(4)')->click();
        $this->byCssSelector('.st_header_user_accountPasswordRecovery');
        $this->iAmOn('PasswordRecovery');
    }

}
?>