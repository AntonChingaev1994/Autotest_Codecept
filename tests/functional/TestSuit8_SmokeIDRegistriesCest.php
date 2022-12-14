<?php
include_once 'method.php';
include_once 'page.php';

class SmokeIDRegistriesCest {

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

    public function IDRegistriesModule(AcceptanceTester $I) {

        $locator = '//div[@id="compound_page_tab_docs_id"]//ul[@class="nav-tabs nav-tabs-limited-height"]';

        $this->perehod->open_object_and_module($I, 128, 'docs_id');

        foreach ($this->locator->locator_id_registries as $locat_module => $element_visibly) {
            $this->object->click_element($I, $locator.$locat_module);

            foreach ($element_visibly as $loc) {
                $I->waitForElementVisible($loc, $this->waiting_time);
            }
        } 
    }
}
?> 