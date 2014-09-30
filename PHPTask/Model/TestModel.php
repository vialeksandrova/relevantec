<?php
require_once(dirname(dirname(__FILE__)) . '/Abstract/Test.php');

class TestModel extends Test
{
    public $topTopCatIds;

	public $topCatIds;

	public $searchWord;

	public $login;

	public $password;

	public $productToBuy;

	public $pageSpecificElements;

	public function iSee($element = null) {
		if(!empty($element)) {
			sleep(600);
			$this->output("Checking if see element");
			$this->assertEquals($element->displayed(), true);
		}
	}

	public function iDontSee($element = null) {
		if(!empty($element)) {
			sleep(1);
			$this->output("Checking if don't see element");
			$this->assertEquals(!$element->displayed(), true);
		}
	}

	public function areEquals($elementOne, $elementTwo) {
		sleep(1);
		$this->output("Checking if elements are equals");
		$this->assertEquals($elementOne, $elementTwo);
	}

	public function areNotEquals($elementOne, $elementTwo) {
		sleep(1);
		$this->output("Checking if elements are not equals");
		$equals = ($elementOne != $elementTwo);
		$this->assertEquals($equals, true);
	}

	public function iAmOn($pageName = null, $element = null, $skip = null) {
		if (!empty($pageName)) {
			sleep(1);
			$this->output("Checking if i am on " . $pageName);
            if($skip == null)
            {
                if (!empty($element)) {
                    $this->assertEquals($element->displayed(), true);
                } else {
                    $this->assertEquals($this->byCssSelector($this->pageSpecificElements[$pageName])->displayed(), true);
                }
            }
		}
	}
}
?>