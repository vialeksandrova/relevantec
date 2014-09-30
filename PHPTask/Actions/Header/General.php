<?php

require_once(dirname(dirname(__FILE__)) . '/General.php');

class HeaderActionsGeneral extends GeneralActions {

    public function clickOnLogo() {
        $this->byCssSelector(".st_logo")->click();
        $this->iAmOn('Homepage');
    }

    public function searchAndSelectSuggested() {
        $this->byId('search')->click();
        $this->keys($this->searchWord);
        sleep(3);
        if ($this->byCssSelector('#search_autocomplete')->displayed()) {
            //$this->byCssSelector('#search_autocomplete a:first-child')->click();
            $this->byCssSelector('.st_search_autocomplete')->click();
        }
        $this->iAmOn('SearchResults');
    }

    public function searchAndPressEnter() {
        $this->byId("search")->click();
        $this->keys($this->searchWord);
        $this->keys("\xEE\x80\x87");
        $this->iAmOn('SearchResults');
    }

    public function searchAndClickButton() {
        $this->byId("search")->click();
        $this->keys($this->searchWord);
        $this->byId("search_btn")->click();
        $this->iAmOn('SearchResults');
    }

    public function switchCountry() {
        $this->hoverOnSiteSwitcher();
        //$this->byCssSelector('.site-swither a:first-child')->click();
        $this->byCssSelector('.st_site-swither')->click();
        $this->iAmOn('OSCShop');
        $this->back();
    }
}
?>