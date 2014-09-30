<?php
require_once(dirname(dirname(__FILE__)) . '/General.php');

class HeaderActionsCustomerService extends GeneralActions {
	
	public function goToMyAccount() {
        $this->hoverOnCustomerService();
        //$this->byCssSelector("li.service-menu-item:nth-child(3) > div:nth-child(3) > div:nth-child(1) > ul:nth-child(1) > li:nth-child(1) > a:nth-child(1)")->click();
        $this->byCssSelector(".st_header_customerService_myAccount")->click();
        $this->iAmOn('LoginOrRegister');
    }

    public function goToSizeTables() {
        $this->hoverOnCustomerService();
        $this->byLinkText($this->translation['Size tables'])->click();
        $this->iAmOn('SizeTables');
    }

    public function goToReturns() {
        $this->hoverOnCustomerService();
        $this->byLinkText($this->translation['Returns'])->click();
        $this->iAmOn('Returns');
    }

    public function goToFAQ() {
        $this->hoverOnCustomerService();
        $this->byLinkText($this->translation['FAQ'])->click();
        $this->iAmOn('FAQ');
    }

    public function goToContactPage() {
        $this->hoverOnCustomerService();
        $this->byLinkText($this->translation['Contact'])->click();
        $this->iAmOn('Contact');
    }
}
?>