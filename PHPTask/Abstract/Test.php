<?php

class Test
{
	public $I;

	public $translation;

	public $langCode;

	public function setI($I) {
        $this->I = $I;
    }

    public function setTranslation($langCode) {
    	$this->langCode = $langCode;
    	require(dirname(dirname(__FILE__)) . '/Translations/' . $langCode . '.php');
    	$this->translation = $translation[$langCode];
    }

	public function output($line) {
		fwrite(STDERR, print_r($line . PHP_EOL, TRUE));
	}

	public function byId($param) {
		$func = __FUNCTION__;
		return $this->I->$func($param);
	}

	public function moveto($param) {
		$func = __FUNCTION__;
		return $this->I->$func($param);
	}

    public function byCssSelector($selector, $wait=30) {
        for ($i=0; $i <= $wait; $i++) {
            try{
                $element = $this->I->byCssSelector($selector);
                return $element;
            }
            catch (Exception $e) {

            }
        }
        return false;
    }

	public function keys($param) {
		$func = __FUNCTION__;
		return $this->I->$func($param);
	}

	public function back() {
		$func = __FUNCTION__;
		return $this->I->$func();
	}

	public function byLinkText($param) {
		$func = __FUNCTION__;
		return $this->I->$func($param);
	}

	public function assertEquals($paramOne,$paramTwo) {
		$func = __FUNCTION__;
		return $this->I->$func($paramOne, $paramTwo);
	}

	public function url($param) {
		$func = __FUNCTION__;
		return $this->I->$func($param);
	}

    public function waitForPageToLoad($param) {
        $func = __FUNCTION__;
        return $this->I->$func($param);
    }
}
?>