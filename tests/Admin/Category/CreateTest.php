<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class CreateTest extends TestCase
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

    /**
     * Test Create
     *
     * @return void
     */
    public function testCreate()
    {
        $this->visit('/')
            ->see('Login')
            ->click('Login')
            ->seePageIs('/auth/login')
            ->type('gnanakeethan@gmail.com', 'email')
            ->type('password', 'password')
            ->press('Login')
            ->seePageIs('/')
            ->visit('/admin')
            ->click('Category')
            ->seePageIs('/admin/category')
            ->click('Create')
            ->seePageIs('/admin/category/create')
            ->type('Testing Category', 'name')
            ->press('Create')
            ->seePageIs('/admin/category')
            ->see('Testing Category');

    }

}

