<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

/**
 * Class: DatabaseSeeder
 *
 * @category DatabaseSeeder
 * @package  LearnMCQ
 * @author   Gnanakeethan Balasubramaniam <gnana@keethan.me>
 * @license  MIT https://license.mit.edu
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
        $this->call(CategorySeeder::class);
        $this->call(SubjectSeeder::class);

        Model::reguard();
    }
}
