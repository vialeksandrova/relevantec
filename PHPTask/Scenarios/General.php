<?php

require_once(dirname(dirname(__FILE__)) . '/Actions/General.php');

class GeneralScenario extends GeneralActions
{
    public $position = array(
        "Header" => 1,
        "Footer" => 2,
        'Homepage' 	=> '.home',
        'SearchResults' => '.search > strong:nth-child(1)',
        'OSCShop' => '#inhalt',
        'Checkout' => '#opc-complete-review',
        'Cart' => '#cart_update',
        'AccountOverview' => '.overview.content-crumb',
        'AccountAddresses' => '.address_book.content-crumb',
        'AccountPasswordChange' => '.change_password.content-crumb',
        'AccountNewsletter' => '.newsletter_subscription.content-crumb',
        'AccountOrder' => '.order.content-crumb',
        'Logout' => '.logoutsuccess.content-crumb',
        'LoginOrRegister' => '.register.content-crumb',
        'PasswordRecovery' => '.password_forgotten.content-crumb',
        'NewCustomerRegistration' => '.register_discount',
        'SizeTables' => '.category1441.content-crumb',
        'Returns' => '.category1361.content-crumb',
        'FAQ' => '.category1301.content-crumb',
        'Contact' => '.category1321.content-crumb',
        'TopTopCategory' => '',
        'MainCategory' => '',
        'SubCategory' => 'li.content-crumb:nth-child(4)',
        'Outlet' => '.outlet.last.content-crumb',
        'Brands' => '.brands.last.content-crumb',
        'BrandShop' => '.brand.last.content-crumb',
        'CategoryWithBrandSelected' => '.custom-filterproduct_brand .btn-remove'
    );

	public function runGeneralScenario() {

        $this->url($this->translation['SYSTEM_domain']);
        $directories = scandir(dirname(__FILE__));
        foreach ($directories as $directory)
        {
            if ($directory === "." || $directory === "..") continue;

            if(strpos($directory, ".php") === false)
            {
                $dir = new DirectoryIterator(dirname(__FILE__) ."/". $directory);
                $this->output("Entering " . $directory);
                foreach ($dir as $fileinfo) {
                    if (!$fileinfo->isDot()) {
                    $filename = $fileinfo->getFilename();
                    require_once dirname(__FILE__) ."/". $directory ."/". $fileinfo->getFilename();
                    $class_name = explode(".",$filename);
                    $class = ucfirst($class_name[0]);
                    $class_def = $directory."Scenario".$class_name[0];
                    $method_name = "run".$directory."Scenario".$class;
                    $GeneralScenario{$class} = new $class_def();
                    $GeneralScenario{$class}->setI($this->I);
                    $GeneralScenario{$class}->setTranslation($this->langCode);
                    $GeneralScenario{$class}->$method_name();
                    die();
                    }
                }
            }
        }
    }
}
?>