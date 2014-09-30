<?php
require_once(dirname(dirname(__FILE__)) . '/Model/TestModel.php');

class TestHelper extends TestHelper
{
	public function hoverOnLoginDropdown() {
		sleep(1);
		$element = $this->byCssSelector('.login-dropdown');
		$this->moveto($element);
		sleep(1);
	}

	public function hoverOnMyAccount() {
		sleep(1);
		$element = $this->byCssSelector('li.service-menu-item:nth-child(1)');
		$this->moveto($element);
		sleep(1);
	}

	public function hoverOnCustomerService() {
		sleep(1);
		$element = $this->byCssSelector('.customer-service');
		$this->moveto($element);
		sleep(1);
	}

	public function hoverOnMDD() {
		sleep(1);
		$element = $this->byCssSelector('#nav');
		$this->moveto($element);
		sleep(1);
	}

    public function hoverOnMiniCart() {
		sleep(1);
		$element = $this->byCssSelector('.top-cart');
		$this->moveto($element);
		sleep(1);
	}

    public function hoverOnSiteSwitcher() {
		sleep(1);
		$element = $this->byCssSelector('.site-swither');
		$this->moveto($element);
		sleep(1);
	}

    public function hoverOnMainCategory() {
		$this->hoverOnMDD();
		$id = $this->topCatIds[array_rand($this->topCatIds)];
		$cssId = "a.level0:nth-child(" . $id . ")";
		$element = $this->byCssSelector($cssId);
		$this->moveto($element);
		sleep(1);
		return $id;
	}

	public function hoverOnBrands() {
		$this->hoverOnMDD();
		$element = $this->byCssSelector('a.level-top:nth-child(1)');
		$this->moveto($element);
		sleep(1);
	}
}
?>