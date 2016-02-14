<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class InteractionTest extends TestCase
{

    use DatabaseTransactions;


    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testLogin()
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

    public function testRegister()
    {
        $this->visit('/')
            ->see('Register')
            ->click('Register')
            ->seePageIs('/auth/register')
            ->type('tester@mailinator.com', 'email')
            ->type('password', 'password')
            ->type('password', 'password_confirmation')
            ->type('Tester', 'name')
            ->press('Register')
            ->seePageIs('/');
    }
}

