<?php
include_once 'method.php';
include_once 'page.php';

class SmokeGPRCest {

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

    public function GPRModule_1(AcceptanceTester $I) {

        $locator = '//ul[@class="nav-tabs nav-tabs-limited-height"]';

        $this->perehod->open_object_and_module($I, 128, 'gpr_new');

        $I->waitForElementVisible('//div[@class="compound_page_tab_subtabs_search"]', $this->waiting_time);

        foreach ($this->locator->locator_gpr as $locat_module => $element_visibly) {
            $this->object->click_element($I, $locator.$locat_module);

            foreach ($element_visibly as $loc) {
                $I->waitForElementVisible($loc, $this->waiting_time);
            }
        } 
    }

    public function GPRModule_2(AcceptanceTester $I) {

        $locator = '//ul[@class="nav-tabs nav-tabs-limited-height"]';
        $locator_modal = '//ul[@class="dropdown-menu show"]';
        $graph_tab = '//a[text()="Графики"]';

        $this->perehod->open_object_and_module($I, 128, 'gpr_new');

        foreach ($this->locator->locator_gpr_schedule as $element_visibly) {

            $this->object->click_element($I, $locator.$graph_tab);
            $I->waitForElementVisible($locator_modal, $this->waiting_time);

            foreach ($element_visibly as $key => $value) {
                $this->object->click_element($I, $locator_modal.$key);

                foreach ($value as $loc) {
                    $I->waitForElementVisible($loc, $this->waiting_time);
                }
            }
        }
    }
}
?> 