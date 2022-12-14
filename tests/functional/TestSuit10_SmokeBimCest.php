<?php
include_once 'method.php';
include_once 'page.php';

class SmokeBimCest {

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

    public function BimModule(AcceptanceTester $I) {

        $locator = '//ul[@class="nav-tabs nav-tabs-limited-height"]';

        $this->perehod->open_object_and_module($I, 128, 'bim-models');

        foreach ($this->locator->locator_bim as $locat_module => $element_visibly) {
            $this->object->click_element($I, $locator.$locat_module);

            foreach ($element_visibly as $loc) {
                $I->waitForElementVisible($loc, $this->waiting_time);
            }

            if ($locat_module == '//a[@data-subtab="models"]') {
                $this->object->click_element($I, '//div[@class="tree_list_table tree_list_root_table"]//a[@data-id="111"]');
                $I->waitForElementVisible('//div[@class="bim_server_content wo-container wo-mobile"]//a[@class="iframeEditor btn btn-primary pir_doc_add"]', $this->waiting_time);
                $I->waitForElementNotVisible('//div[@class="wo_header_block_container_actions"]//a[@style="display: none;"]', $this->waiting_time);
            } elseif ($locat_module == '//a[@data-subtab="bim_notices"]') {
                $I->waitForElementNotVisible('//div[@class="wo_header_block_container_actions"]//a[@style="display: none;"]', $this->waiting_time);
                $I->waitForElementNotVisible('//div[@class="bim_server_content wo-container wo-mobile"]//a[@class="iframeEditor btn btn-primary pir_doc_add"]', $this->waiting_time);
            }
        } 
    }
}
?> 