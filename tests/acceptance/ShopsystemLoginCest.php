<?php 

class ShopsystemLoginCest
{
    public function loginTest(AcceptanceTester $I)
    {
        $I->amOnPage('/my-account');
        $I->fillField('#username','admin');
        $I->fillField('#password','password');
        $I->click('#post-56 > div > div > form > p:nth-child(3) > button');
        $I->see('Hello admin');
    }
}
