<?php
include_once 'method.php';
include_once 'page.php';

class SmokePirCest {

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

    public function PirModule_1(AcceptanceTester $I) {

        $locator = '//ul[@class="nav-tabs nav-tabs-limited-height"]';

        $this->perehod->open_object_and_module($I, 128, 'pir');

        foreach ($this->locator->locator_pir as $locat_module => $element_visibly) {
            $this->object->click_element($I, $locator.$locat_module);

            foreach ($element_visibly as $loc) {
                $I->waitForElementVisible($loc, $this->waiting_time);
            }
        } 
    }

    public function PirModule_2(AcceptanceTester $I) {

        $locator = '//ul[@class="nav-tabs nav-tabs-limited-height"]';
        $locator_modal = '//ul[@class="dropdown-menu show"]';
        $graph_tab = '//a[text()="Документация"]';

        $this->perehod->open_object_and_module($I, 128, 'pir');

        foreach ($this->locator->locator_pir_schedule as $element_visibly) {

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