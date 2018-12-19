<?php 
use App\User as User;

class UserCest
{
    public function _before(UnitTester $I)
    {
    }

    // tests
    public function testValidUserSignin(UnitTester $I)
    {
        $user = new User("admin", "admin");
        $I->assertTrue($user->signin());
    }

    public function testInvalidUserSignin(UnitTester $I)
    {
        $user = new User("admin", "wrong-password");
        $I->assertFalse($user->signin());
    }
}
