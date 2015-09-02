<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class EditTest extends TestCase
{

    use DatabaseTransactions;

    /**
     * Testing Login Individually
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
            ->see('Testing Category')
            ->click('Edit')
            ->see('Testing Category')
            ->type('Updated Category', 'name')
            ->press('Update')
            ->seePageIs('/admin/category')
            ->see('Updated Category');

    }

}

