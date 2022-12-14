<?php
include_once 'method.php';
include_once 'page.php';

class SmokeSkCest {

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

    public function SkModule(AcceptanceTester $I) {

        $locator = '//div[@id="compound_page_tab_sk"]//ul[@class="nav-tabs nav-tabs-limited-height"]';

        $this->perehod->open_object_and_module($I, 128, 'sk');

        foreach ($this->locator->locator_sk as $locat_module => $element_visibly) {
            $this->object->click_element($I, $locator.$locat_module);

            foreach ($element_visibly as $loc) {
                $I->waitForElementVisible($loc, $this->waiting_time);
            }
        } 
    }
}
?> 