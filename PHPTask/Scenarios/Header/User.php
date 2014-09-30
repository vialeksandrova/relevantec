<?php
require_once(dirname(dirname(__FILE__)) . '/' . '../Actions/Header/User.php');

class HeaderScenarioUser extends HeaderActionsUser {

    public $login = "email@gmail.com";

    public $password = "TestPass1!";

    public $productToBuy = "masterdis-tube-laces-140cm-55119421";

    public $pageSpecificElements = array(
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

    public function runHeaderScenarioUser() {
        $this->goToRegister();
        $this->goToPasswordRecovery();
        $this->login();
        $this->goToAccountInformation();
        $this->goToAddresses();
        $this->goToNewslettersManagement();
        $this->goToMyOrders();
        $this->goToLogout();
    }
}

?>