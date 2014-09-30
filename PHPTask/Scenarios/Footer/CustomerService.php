<?php
require_once(dirname(dirname(__FILE__)) . '/' . '../Actions/Footer/CustomerService.php');

class FooterScenarioCustomerService extends FooterActionsCustomerService {

    public $pageSpecificElements = array(
        'LoginOrRegister' => '.register.content-crumb',
        'Returns' => '.page-title h1',
        'Contact' => '.page-title h1',
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

    public function runFooterScenarioCustomerService() {

        $this->goToMyAccount();
        $this->goToReturns();
        $this->goToContactPage();
    }
}

?>