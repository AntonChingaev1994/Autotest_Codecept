<?php
require 'method.php';
require 'page.php';

class DirectoryCest {

    public $object, $locator, $perehod = '';
    public $waiting_time = 30;
    public $login = 'chingaev';
    public $password = 'aschingaev1994';

    public function __construct() {
        $this->object = new MethodClass;
        $this->locator = new LocatorClass;
        $this->perehod = new PerehodClass;
    }

    public function _before(AcceptanceTester $I) {
        $I->amOnPage('/login');
        $I->fillField($this->locator->locator_login, $this->login);
        $I->fillField($this->locator->locator_password, $this->password);
        $this->object->click_element($I, $this->locator->locator_submit);
        $I->seeElement($this->locator->locator_logo);
    }

    // tests
    public function ContractValidation(AcceptanceTester $I) {

        $this->object->click_element($I, $this->locator->locator_project);

        $this->object->mouse_over_element($I, $this->locator->locator_test_object);

        $this->object->click_element($I, $this->locator->locator_shcool);

        $this->object->click_element($I, $this->locator->locator_project_management);

        $I->waitForElementVisible($this->locator->locator_categor, $this->waiting_time);
        $this->object->click_element($I, $this->locator->locator_register_contracts);

        $I->waitForElementVisible($this->locator->locator_flag_contract, $this->waiting_time);

        $this->object->click_element($I, $this->locator->locator_btn_add_contract);

        $this->object->switchIFrame($I, True);
        $I->fillField($this->locator->locator_field_number, 'test');
        $I->waitForElementNotVisible($this->locator->locator_flag_validate, $this->waiting_time);
        $this->object->switchIFrame($I, False);

        $this->object->click_element($I, $this->locator->locator_btn_create);

        $this->object->switchIFrame($I, True);
        $I->waitForElementVisible($this->locator->locator_flag_validate, $this->waiting_time);
        $this->object->click_element($I, $this->locator->locator_field_type_contract);
        $this->object->switchIFrame($I, False);

        $this->object->click_element($I, $this->locator->locator_element);
        $this->object->click_element($I, $this->locator->locator_btn_create);

        $this->object->switchIFrame($I, True);
        $I->waitForElementVisible($this->locator->locator_flag_validate_new, $this->waiting_time);
        $this->object->switchIFrame($I, False);
    }
}
?>