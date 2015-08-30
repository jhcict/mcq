<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

/**
 * Class: DatabaseSeeder.
 *
 * @category DatabaseSeeder
 *
 * @author   Gnanakeethan Balasubramaniam <gnana@keethan.me>
 * @license  MIT https://license.mit.edu
 *
 * @link     https://mcq.learntechnologies.org/
 * @link     http://laravel.com/docs/5.1/migration
 * @see      Seeder
 */
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(SystemSeeder::class);

        Model::reguard();
    }
}
