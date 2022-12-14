<?php
include_once 'method.php';
include_once 'page.php';

class SmokeEstimatesCest {

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

    public function EstimatesModule(AcceptanceTester $I) {

        $this->perehod->open_object_and_module($I, 128, 'smeta');

        foreach ($this->locator->locator_estimates_smoke as $locat_module => $element_visibly) {

            $I->wait(1);
            $this->object->click_element($I, $locat_module);

            foreach ($element_visibly as $loc) {
                $I->waitForElementVisible($loc, $this->waiting_time);
            }
        }
    }
}
?>