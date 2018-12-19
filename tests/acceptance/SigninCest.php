<?php 

class SigninCest
{
    public function _before(AcceptanceTester $I)
    {
        $I->amOnPage('/');
    }

    public function shouldSigninWithValidCredentials(AcceptanceTester $I) {
        $I->fillField('username', 'admin');
        $I->fillField('password', 'admin');
        $I->click('login');
        $I->see('Welcome to the dash board');
    }
    
    public function shouldNotSignInWithInvalidCredentials(AcceptanceTester $I)
    {
        $I->fillField('username', 'sm');
        $I->fillField('password', 'sm');
        $I->click('login');
        $I->see('Invalid Username or Password');
    }
}
