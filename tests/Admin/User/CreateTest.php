<?php

namespace Admin\Category\User;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use TestCase;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class CreateTest extends TestCase
{

    use DatabaseTransactions;


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

