<?php
include_once 'method.php';
include_once 'page.php';

class SmokeReportsCest {

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

    public function ReportsModule(AcceptanceTester $I) {

        $this->perehod->open_object_and_module($I, 128, 'reports');

        foreach ($this->locator->locator_reports as $locator) {
            $I->waitForElementVisible($locator, $this->waiting_time);
        }
    }
}
?> 