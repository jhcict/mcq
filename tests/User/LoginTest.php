<?php



use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class LoginTest extends TestCase
{

    use DatabaseTransactions;

    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testHomePage()
    {
        $this->visit('/')
            ->see('Login')
            ->click('Login')
            ->seePageIs('/auth/login')
            ->type('gnanakeethan@gmail.com','email')
            ->type('password','password')
            ->press('Login')
            ->seePageIs('/');
    }
}
