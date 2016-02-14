<?php



use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class RegisterTest extends TestCase
{

    use DatabaseTransactions;

    /**
     * Testing user Registration
     *
     * @return void
     */
    public function testRegisterFromHomePage()
    {
        $this->visit('/')
            ->see('Register')
            ->click('Register')
            ->seePageIs('/auth/register')
            ->type('testinguser@mailinator.com', 'email')
            ->type('Testing User', 'name')
            ->type('password', 'password')
            ->type('password', 'password_confirmation')
            ->press('Register')
            ->seePageIs('/');
    }


}
