<?php

use Illuminate\Database\Seeder;

use App\Category;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name'=>'Technology'
        ]);
        Category::create([
            'name'=>'Science'
        ]);
        Category::create([
            'name'=>'Arts'
        ]);
        Category::create([
            'name'=>'Commerce'
        ]);
        Category::create([
            'name'=>'General'
        ]);
    }
}
