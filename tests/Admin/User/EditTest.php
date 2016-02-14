<?php

namespace Admin\Category\User;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use TestCase;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class EditTest extends TestCase
{

    use DatabaseTransactions;


    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testEdit()
    {
        $this->visit('/')
            ->see('Login')
            ->click('Login')
            ->seePageIs('/auth/login')
            ->type('gnanakeethan@gmail.com', 'email')
            ->type('password', 'password')
            ->press('Login')
            ->seePageIs('/')
            ->click('Admin')
            ->seePageIs('/admin')
            ->see('Users')
            ->click('Users')
            ->see('Edit')
            ->click('Edit')
            ->type('TestingUser','name')
            ->select('admin','group')
            ->press('Submit');
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


