<?php


use Illuminate\Foundation\Testing\DatabaseTransactions;

class LoginTest extends TestCase
{
    use DatabaseTransactions;

    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testLoginFromHomePage()
    {
        $this->visit('/')
            ->see('Login')
            ->click('Login')
            ->seePageIs('/auth/login')
            ->type('gnanakeethan@gmail.com', 'email')
            ->type('password', 'password')
            ->press('Login')
            ->seePageIs('/');
    }

    /**
     * Testing the login with admin redirect.
     *
     * @return void
     */
    public function testLoginWithAdminRedirect()
    {
        $this->visit('/admin')
            ->seePageIs('/auth/login')
            ->see('Login')
            ->type('gnanakeethan@gmail.com', 'email')
            ->type('password', 'password')
            ->press('Login')
            ->seePageIs('/admin');
    }

    /**
     * Testing the login with Invalid Credentials.
     *
     * @return void
     */
    public function testInvalidLogin()
    {
        $this->visit('/')
            ->see('Login')
            ->click('Login')
            ->seePageIs('/auth/login')
            ->type('passcode@gmail.com', 'email')
            ->type('password', 'password')
            ->press('Login')
            ->seePageIs('/auth/login')
            ->see('These credentials do not match our records.');
    }
}
