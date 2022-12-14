<?php

class SigninCest
{
    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        $I->amOnPage('/login');
        $I->fillField('//input[@id="inputLogin"]', 'chingaev');
        $I->fillField('//input[@id="inputPassword"]', 'aschingaev1994');
        $I->click('//button[@type="submit"]');
        $I->seeElement('//img[@src="/eks/im/cus_logo.png"]');
    }
}